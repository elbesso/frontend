#!/usr/bin/php5
<?php
/**
 * Created by IntelliJ IDEA.
 * User: dmitry
 * Date: 15.11.15
 * Time: 16:47
 */
$connection = mysqli_connect("localhost", "backoffice", "backoffice", "backoffice") or die('Unable to connect to the database');

$file = "./country.php";
$current = '';
$res = $connection->query("SELECT * FROM country");
while ($row = $res->fetch_assoc()) {
    $current .= "<option id=\"" . $row['id'] . "\" class=\"country\" value=\"" . $row['id'] . "\"><?php echo gettext(\"" . $row['id'] . "\")?></option>\n";
}
file_put_contents($file, $current);

$file = "./state.php";
$current = '';
$res = $connection->query("SELECT * FROM state WHERE country_id = 'UNITED_STATES'");
while ($row = $res->fetch_assoc()) {
    $current .= "<option id=\"" . $row['id'] . "\" class=\"state\" value=\"" . $row['id'] . "\"><?php echo gettext(\"" . $row['id'] . "\")?></option>\n";
}
file_put_contents($file, $current);

$file = "./province.php";
$current = '';
$res = $connection->query("SELECT * FROM state WHERE country_id = 'CANADA'");
while ($row = $res->fetch_assoc()) {
    $current .= "<option id=\"" . $row['id'] . "\" class=\"province\" value=\"" . $row['id'] . "\"><?php echo gettext(\"" . $row['id'] . "\")?></option>\n";
}
file_put_contents($file, $current);

$connection->close();
