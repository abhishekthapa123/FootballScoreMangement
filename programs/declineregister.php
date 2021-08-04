<?php
include('connection.php');

$teamid =  $_GET['teamid'];
$tournamentid= $_GET['tournamentid'];
$sql = "DELETE FROM teams WHERE id='{$teamid}'AND tid='{$tournamentid}'";

if (mysqli_query($conn, $sql)) {
header("Location:listregisterteams.php?tid=".$tournamentid);
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);



?>