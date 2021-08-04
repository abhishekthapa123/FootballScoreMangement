<?php
include('connection.php');
$tid = $_POST['tid'];
$feedback = $_POST['feedback'];
$sql = "INSERT INTO feedback (tid, feedback)
VALUES ('$tid','$feedback')";

if (mysqli_query($conn, $sql)) {
 header("Location:listtournament.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>