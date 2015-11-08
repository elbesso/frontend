<?php
/**
 * Created by IntelliJ IDEA.
 * User: dmitry
 * Date: 05.11.15
 * Time: 18:09
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

class Registration_Form{
    function __construct($details)
    {
        $this->email_admin = $admin_email = 'your@yourdomain.com';
        $this->response_status = 0;
        $this->response_html = '';
        $this->subject = 'Contact from Your Website';
        $this->message = 'You have been registered at Your Website';

        $this->name = $_POST['registration_name'];
        $this->surname = $_POST['registration_surname'];
        $this->organization = $_POST['registration_organization'];
        $this->position = $_POST['registration_position'];
        $this->email = $_POST['registration_email'];
        $this->country = $_POST['registration_country'];
        $this->state = $_POST['registration_state'];
        $this->city = $_POST['registration_city'];
        $this->postcode = $_POST['registration_postcode'];
        $this->address = $_POST['registration_address'];
        $this->phone_number = $_POST['registration_phone_number'];
        $this->invite = $_POST['registration_invite'];
    }

    private function sendEmail(){
        $to = $this->email;;
        $subject = $this->subject;
        $message = $this->message;
        $headers = 'From: ' . $this->email_admin . "\r\n" .
            'Reply-To: ' . $this->email_admin . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $mail = mail($to, $subject, $message, $headers);
        if($mail) {
            $this->response_html .= '<p>The email has been sent to the provided address</p>';
        } else {
            $this->response_html .= '<p>Unable to sent an email to the provided address</p>';
        }
    }

    function sendResponse()
    {
        if ($_POST) {
            if (!$connection = mysqli_connect("localhost", "backoffice", "backoffice", "backoffice")) {
                $this->response_html = '<p>Internal error</p>';
                error_log("Connection error: (" . $connection->errno . ") " . $connection->error);
            } else {
                if (!$stmt_select = $connection->prepare("SELECT * FROM invite WHERE invite = ?")) {
                    $this->response_html = '<p>Database failure prepare</p>';
                    error_log("Prepare failed(select): (" . $connection->errno . ") " . $connection->error);
                } else {
                    $stmt_select->bind_param('s', $this->invite);
                    if (!$stmt_select->execute()) {
                        $this->response_html = '<p>Internal error</p>';
                        error_log("Execute failed(select): (" . $stmt_select->errno . ") " . $stmt_select->error);
                    } else {
                        if (!$res = $stmt_select->get_result()) {
                            $this->response_html = '<p>Internal error</p>';
                            error_log("Getting result set failed(select): (" . $stmt_select->errno . ") " . $stmt_select->error);
                        } else {
                            if ($res->num_rows == 0) {
                                $this->response_html = '<p>Incorrect invite</p>';
                            } else {
                                $row = $res->fetch_assoc();
                                if ($row["date_activated"] != null or $row["user_id"] != null) {
                                    $this->response_html = '<p>The invite is already used</p>';
                                } else {
                                    if (!$stmt_insert = $connection->prepare('INSERT INTO user (name, surname,
                                          organization, position, email, country, state, city, postcode, address,
                                          phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
                                        $this->response_html = '<p>Internal error</p>';
                                        error_log("Prepare failed(insert): (" . $connection->errno . ") " . $connection->error);
                                    } else {
                                        $stmt_insert->bind_param('sssssssssss', $this->name, $this->surname,
                                            $this->organization, $this->position, $this->email, $this->country,
                                            $this->state, $this->city, $this->postcode, $this->address, $this->phone_number);
                                        if (!$stmt_insert->execute()) {
                                            $this->response_html = '<p>Internal error</p>';
                                            error_log("Execute failed(insert): (" . $connection->errno . ") " . $connection->error);
                                        } else {
                                            $user_id = $stmt_insert->insert_id;
                                            if (!$stmt_update = $connection->prepare('UPDATE invite SET user_id = ?, date_activated = now()
                                                WHERE invite = ?')) {
                                                $this->response_html = '<p>Internal error</p>';
                                                error_log("Prepare failed(update): (" . $connection->errno . ") " . $connection->error);
                                            } else {
                                                $stmt_update->bind_param('ss', $user_id, $this->invite);
                                                if(!$stmt_update->execute()) {
                                                    $this->response_html = '<p>Internal error</p>';
                                                    error_log("Execute failed(update): (" . $stmt_update->errno . ") " . $stmt_update->error);
                                                } else {
                                                    $this->response_html = '<p>Welcome!</p>';
                                                    $this->response_status = 1;
                                                    $this->sendEmail();
                                                }
                                                $stmt_update->close();
                                            }
                                        }
                                        $stmt_insert->close();
                                    }
                                }
                            }
                        }
                    }
                    $stmt_select->close();
                }
                $connection->close();
            }

            $response = array();
            $response['status'] = $this->response_status;
            $response['html'] = $this->response_html;
            echo json_encode($response);
        }
    }
}

$registration_form = new Registration_Form($_POST);
$registration_form->sendResponse();