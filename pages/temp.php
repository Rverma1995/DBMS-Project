<?php
  $servername = "sql6.freemysqlhosting.net:3306";
  $username = "sql6116110";
  $password = "z4yM9J2x3Y";
  $dbname = "sql6116110";
  $doctor_id = $_POST['data'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      echo "fail";
      die();
  }
  $sql = "DELETE FROM doctor WHERE doctor_id=$doctor_id";
  if ($conn->query($sql) === TRUE) {
      echo "succ";
  } else {
      echo "fail";
  }
  $conn->close();
?>
