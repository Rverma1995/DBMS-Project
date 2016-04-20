<?php
$servername = "sql6.freemysqlhosting.net:3306";
$username = "sql6116110";
$password = "z4yM9J2x3Y";
$dbname = "sql6116110";

$employee_id = $_POST['data'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "fail";
    die();
}

// sql to delete a record
$sql = "DELETE FROM employee WHERE employee_id=$employee_id";

if ($conn->query($sql) === TRUE) {
    echo "succ";
} else {
    echo "fail";
}

$conn->close();
?>
