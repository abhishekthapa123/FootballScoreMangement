<?php

$tournament_id = $_GET['tid'];
include('connection.php');
$sql = "UPDATE tournaments SET flag='1' WHERE id='".$tournament_id."'";

if (mysqli_query($conn, $sql)) {
header("Location:adminlisttournament.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>