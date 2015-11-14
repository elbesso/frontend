<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 13.11.15
 * Time: 14:56
 */
require("setup.php");
$response = array();
$response['html'] = '';
$response['status'] = 0;
$connection = mysqli_connect("localhost", "backoffice", "backoffice", "backoffice");

if ($_GET) {
    if (!$connection) {
        error_log("Connection failed: " . error_get_last());
    } else {
        $country = $_GET['param'];
        if ($country == 'UNITED_STATES' || $country == 'CANADA') {
            $res = $connection->query("SELECT * FROM state WHERE country_id = '$country'");
            while ($row = $res->fetch_assoc()) {
                $response['html'] .= '<option id="' . $row['id'] . '" class="country">' . gettext($row['id']) . '</option>\n';
            }
            $response['status'] = 1;
        } else if ($country == 'country') {
            $res = $connection->query("SELECT * FROM country");
            while ($row = $res->fetch_assoc()) {
                $response['html'] .= '<option id="' . $row['id'] . '" class="state">' . gettext($row['id']) . '</option>\n';
            }
            $response['status'] = 1;
        }
    }
}

echo json_encode($response);
$connection->close();