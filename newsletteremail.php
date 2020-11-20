<?php

include 'connection.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$email = $_POST['newslettere'];

$sql = "INSERT INTO newsletter(`email_address`) VALUE ('$email')";


if ($conn->query($sql) === TRUE) {
  echo "Thanks Appointment Booked";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
}
