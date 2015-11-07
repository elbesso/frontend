<?php
/**
 * Created by IntelliJ IDEA.
 * User: dmitry
 * Date: 05.11.15
 * Time: 18:09
 */

class Registration_Form{
    function __construct($details)
    {
        $this->connection = mysqli_connect("localhost", "backoffice", "backoffice", "backoffice");

        $this->name = $_POST['name'];
        $this->surname = $_POST['surname'];
        $this->organization = $_POST['organization'];
        $this->position = $_POST['position'];
        $this->email = $_POST['email'];
        $this->country = $_POST['country'];
        $this->state = $_POST['state'];
        $this->city = $_POST['city'];
        $this->postcode = $_POST['postcode'];
        $this->address = $_POST['address_line_1'];
        if ($_POST['address_line_2'] != null) {
            $this->address .= '\n' . $_POST['address_line_2'];
        }
        if ($_POST['address_line_3'] != null) {
            $this->address .= '\n' . $_POST['address_line_3'];
        }
        $this->phone_number = $_POST['phone_number'];
        $this->invite = $_POST['invite'];
    }

    function sendResponse()
    {
        if ($_POST) {
            $response = array();
            if (mysqli_error($this->connection)) {
                $response['html'] .= '<p>Connection failed!</p>';
        }
            $res = mysqli_query($this->connection, "SELECT * FROM invite WHERE invite = '$this->invite'");
            if (mysqli_num_rows($res) > 1) {
                $response['html'] = '<p>The invite is not unique</p>';
            }
            $row = mysqli_fetch_assoc($res);
            if ($row == null) {
                $response['html'] = '<p>Incorrect invite</p>';
            } else {
                if ($row["date_activated"] != null or $row["user_id"] != null) {
                    $response['html'] = '<p>The invite is already used</p>';
                } else {
                    mysqli_query($this->connection, "INSERT INTO user (name, surname, organization, position, email, country, state,
                          city, postcode, address, phone_number) VALUES ('$this->name', '$this->surname',
                          '$this->organization', '$this->position', '$this->email', '$this->country', '$this->state', '$this->city',
                          '$this->postcode', '$this->address', '$this->phone_number')");
                    $user_id = mysqli_insert_id($this->connection);
                    mysqli_query($this->connection, "UPDATE invite SET user_id = $user_id, date_activated = now()
                                                      WHERE invite = '$this->invite'");
                    $response['html'] = '<p>Welcome!</p>';
                }
            }
            echo json_encode($response);
        }
    }
}

$registration_form = new Registration_Form($_POST);
$registration_form->sendResponse();