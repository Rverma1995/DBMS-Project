<?php
$servername = "localhost";
$username = "admin2";
$password = "admin2";
$dbname = "dbms_pharmacy";

$drug_id = $_POST['data'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "fail";
    die();
}

// sql to delete a record
$sql = "SELECT drug_id, price FROM drug";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["drug_id"] == $drug_id) {
            echo $row["price"];
        }
    }
} else {
    echo "fail";
}
$conn->close();
?>
