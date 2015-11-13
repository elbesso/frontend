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
if (!$connection) {
    error_log("Connection failed: " . error_get_last());
} else {
    $res = $connection->query("SELECT * FROM country");
    while ($row = $res->fetch_assoc()) {
        $response['html'] .= '<option id="' . $row['id'] . '" class="country">' . gettext($row['id']) . '</option>\n';
    }
    $response['status'] = 1;
}
echo json_encode($response);