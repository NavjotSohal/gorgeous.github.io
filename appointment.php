<?php

include 'connection.php';

$PersonName = $_POST['PersonName'];
$PersonMobile = $_POST['PersonMobile'];
$ServiceAt = $_POST['ServiceAt'];
$ServiceReg = $_POST['ServiceReg'];
$PrefTime = $_POST['PrefTime'];

$sql = "INSERT INTO appointments (`PersonName`, `PersonMobile`, `ServiceAt`, `ServiceReg`,`PrefTime`) VALUES ('$PersonName', '$PersonMobile', '$ServiceAt', '$ServiceReg', '$PrefTime')";

if ($conn->query($sql) === TRUE) {
  echo "Thanks Appointment Booked";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
}
