<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6116110";
$password = "z4yM9J2x3Y";
$dbname = "sql6116110";

$pharmacy_id = $_POST['data'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "fail";
    die();
}

// sql to delete a record
$sql = "DELETE FROM pharmacy WHERE pharmacy_id=$pharmacy_id";

if ($conn->query($sql) === TRUE) {
    echo "succ";
} else {
    echo "fail";
}

$conn->close();
?>
