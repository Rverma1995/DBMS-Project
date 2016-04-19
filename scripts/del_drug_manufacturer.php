<?php
$servername = "localhost";
$username = "admin2";
$password = "admin2";
$dbname = "dbms_pharmacy";

$drug_manufacturer_id = $_POST['data'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "fail";
    die();
}

// sql to delete a record
$sql = "DELETE FROM drug_manufacturer WHERE drug_manufacturer_id=$drug_manufacturer_id";

if ($conn->query($sql) === TRUE) {
    echo "succ";
} else {
    echo "fail";
}

$conn->close();
?>
