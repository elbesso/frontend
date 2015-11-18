<?php
/**
 * Created by IntelliJ IDEA.
 * User: dmitry
 * Date: 05.11.15
 * Time: 18:09
 */
require_once 'autoload.php';

class Registration_Form {
    private $connection;
    private $stmt_select_inv;
    private $stmt_select_usr;
    private $stmt_insert;
    private $stmt_update;
    private $user_id;
    private $client_ip;

    private $name;
    private $surname;
    private $organization;
    private $position;
    private $email;
    private $country;
    private $state;
    private $city;
    private $postcode;
    private $address;
    private $phone_number;
    private $invite;

    public $response_status;
    public $response_html;

    function __construct($details) {
        $this->response_status = 0;
        $this->response_html = "internal_error";
        $this->client_ip = $_SERVER['REMOTE_ADDR'];
        $this->name = $_POST['registration_name'];
        $this->surname = $_POST['registration_surname'];
        $this->organization = $_POST['registration_organization'];
        $this->position = $_POST['registration_position'];
        $this->email = $_POST['registration_email'];
        $this->country = $_POST['registration_country'];
        if (array_key_exists('registration_state', $_POST) && $this->country == 'US') {
            $this->state = $_POST['registration_state'];
        } else if (array_key_exists('registration_province', $_POST) && $this->country == 'CA') {
            $this->state = $_POST['registration_province'];
        } else {
            $this->state = null;
        }
        $this->city = $_POST['registration_city'];
        $this->postcode = $_POST['registration_postcode'];
        $this->address = $_POST['registration_address_line_1'].' '.$_POST['registration_address_line_2'];
        $this->phone_number = $_POST['registration_phone_number'];
        $this->invite = $_POST['registration_invite'];

        $secret = "6LfbOxETAAAAAEJprF2vBWWdqE78G0bURcdPZ4YK";
        $reCaptcha = new \ReCaptcha\ReCaptcha($secret);
        $this->recaptcha_resp = $reCaptcha->verify($this->client_ip, $_POST['g-recaptcha-response']);

        if (!$this->connection = mysqli_connect("localhost", "backoffice", "backoffice", "backoffice")) {
            error_log("Connection failed: " . $this->connection->error);
        } else {
            $this->connection->set_charset("utf8");
            if (!$this->stmt_select_inv = $this->connection->prepare("SELECT * FROM invite WHERE invite = ?")) {
                error_log("Prepare failed(select invite): " . error_get_last());
            } else {
                $this->stmt_select_inv->bind_param('s', $this->invite);
            }
            if (!$this->stmt_select_usr = $this->connection->prepare("SELECT * FROM user WHERE name = ?
                    AND surname = ? AND email = ?")) {
                error_log("Prepare failed(select user): " . $this->connection->error);
            } else {
                $this->stmt_select_usr->bind_param('sss', $this->name, $this->surname, $this->email);
            }
            if (!$this->stmt_insert = $this->connection->prepare('INSERT INTO user (name, surname, organization,
                    position, email, country_id, state_id, city, postcode, address, phone_number)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')
            ) {
                error_log("Prepare failed(insert): " . $this->connection->error);
            } else {
                $this->stmt_insert->bind_param('sssssssssss', $this->name, $this->surname, $this->organization,
                    $this->position, $this->email, $this->country, $this->state, $this->city, $this->postcode,
                    $this->address, $this->phone_number);
            }
            if (!$this->stmt_update = $this->connection->prepare('UPDATE invite SET user_id = ?, date_activated = now()
                    WHERE invite = ?')
            ) {
                error_log("Prepare failed(update): " . $this->connection->error);
            } else {
                $this->stmt_update->bind_param('ss', $this->user_id, $this->invite);
            }
        }
    }

    function __destruct() {
        if ($this->stmt_select_inv) {
            $this->stmt_select_inv->close();
        }
        if ($this->stmt_select_usr) {
            $this->stmt_select_usr->close();
        }
        if ($this->stmt_insert) {
            $this->stmt_insert->close();
        }
        if ($this->stmt_update) {
            $this->stmt_update->close();
        }
        if ($this->connection) {
            $this->connection->close();
        }
    }

    function send_email() {
        $to = 'test@gmail.com';
        $subject = "An invite has been activated";
        $message = "Hello";
        $headers = 'From: test@gmail.com' . "\r\n" .
            'Reply-To: test@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $mail = mail($to, $subject, $message, $headers);
        if (!$mail) {
            error_log("Unable to sent an email to the provided address");
        }
    }

    function send_response() {
        if ($_POST ) {
            if ($this->connection && $this->stmt_select_inv && $this->stmt_select_usr && $this->stmt_insert
                && $this->stmt_update && $this->client_ip) {
                $bad_invite_limit = 2;
                $bad_captcha_limit = 3;
                $lockout_time = 1;
                $first_failed_invite_time = 0;
                $first_failed_captcha_time = 0;
                $failed_invite_count = 0;
                $failed_captcha_count = 0;

                $res = $this->connection->query("SELECT * FROM captcha_lockout WHERE ip = '$this->client_ip'");
                if ($res->num_rows == 0) {
                    $this->connection->query("INSERT INTO captcha_lockout VALUES ('$this->client_ip', 0, 0");
                } else {
                    $row = $res->fetch_assoc();
                    $first_failed_captcha_time = strtotime($row['first_failed_time']);
                    $failed_captcha_count = $row['failed_count'];
                }
                if (($first_failed_captcha_time >= $bad_captcha_limit) && (time() - $first_failed_captcha_time < $lockout_time)) {
                    $this->response_html = "locked";
                } else {
                    if ($this->recaptcha_resp == null || !$this->recaptcha_resp->isSuccess()) {
                        $failed_captcha_count++;
                        if (time() - $first_failed_captcha_time > $lockout_time) {
                            $this->connection->query("UPDATE captcha_lockout SET first_failed_time = now(),
                            failed_count = 1 WHERE ip = '$this->client_ip'");
                        } else {
                            $this->connection->query("UPDATE captcha_lockout SET failed_count = $failed_captcha_count
                            WHERE ip = '$this->client_ip");
                        }
                    } else {
                        $res = $this->connection->query("SELECT * FROM invite_lockout WHERE ip = '$this->client_ip'");
                        if ($res->num_rows == 0) {
                            $this->connection->query("INSERT INTO invite_lockout VALUES ('$this->client_ip', 0, 0)");
                        } else {
                            $row = $res->fetch_assoc();
                            $first_failed_invite_time = strtotime($row['first_failed_time']);
                            $failed_invite_count = $row['failed_count'];
                        }
                        if (($failed_invite_count >= $bad_invite_limit) && (time() - $first_failed_invite_time < $lockout_time)) {
                            $this->response_html = "locked";
                        } else {
                            if (!$this->stmt_select_inv->execute()) {
                                error_log("Execute failed(select invite): " . $this->connection->error);
                            } else {
                                if (!$res = $this->stmt_select_inv->get_result()) {
                                    error_log("Get result failed(select invite): " . $this->connection->error);
                                } else {
                                    if ($res->num_rows == 0) {
                                        $this->response_html = "invite_incorrect";
                                        $failed_invite_count++;
                                        if (time() - $first_failed_invite_time > $lockout_time) {
                                            $this->connection->query("UPDATE invite_lockout SET first_failed_time = now(),
                                        failed_count = 1 WHERE ip = '$this->client_ip'");
                                        } else {
                                            $this->connection->query("UPDATE invite_lockout SET failed_count = $failed_invite_count
                                        WHERE ip = '$this->client_ip'");
                                        }
                                    } else {
                                        $row = $res->fetch_assoc();
                                        if ($row["date_activated"] != null or $row["user_id"] != null or (strtotime($row["date_expire"]) < time())) {
                                            if ($row["date_activated"] != null or $row["user_id"] != null) {
                                                $this->response_html = "invite_used";
                                            } else if (strtotime($row["date_expire"]) < time()) {
                                                $this->response_html = "invite_expired";
                                            }
                                            $failed_invite_count++;
                                            if (time() - $first_failed_invite_time > $lockout_time) {
                                                $this->connection->query("UPDATE invite_lockout SET first_failed_time = now(),
                                        failed_count = 1 WHERE ip = '$this->client_ip'");
                                            } else {
                                                $this->connection->query("UPDATE invite_lockout SET failed_count = $failed_invite_count
                                        WHERE ip = '$this->client_ip'");
                                            }
                                        } else {
                                            if (!$this->stmt_select_usr->execute()) {
                                                error_log("Execute failed(select user): " . $this->connection->error);
                                            } else {
                                                if (!$res = $this->stmt_select_usr->get_result()) {
                                                    error_log("Get result failed(select user): " . $this->connection->error);
                                                } else {
                                                    if ($res->num_rows == 0) {
                                                        if (!$this->stmt_insert->execute()) {
                                                            error_log("Execute failed(insert): " . $this->connection->error);
                                                        } else {
                                                            $this->user_id = $this->stmt_insert->insert_id;
                                                        }
                                                    } else {
                                                        $row = $res->fetch_assoc();
                                                        $this->user_id = $row['id'];
                                                    }
                                                    if (!$this->stmt_update->execute()) {
                                                        error_log("Execute failed(update): " . $this->connection->error);
                                                    } else {
                                                        $this->response_html = "WELCOME";
                                                        $this->response_status = 1;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $response = array();
            $response['status'] = $this->response_status;
            $response['html'] = $this->response_html;
            echo json_encode($response);
        }
    }
}

$registration_form = new Registration_Form($_POST);
$registration_form->send_response();
//if ($registration_form->response_status) {
//    $registration_form->send_email();
//}