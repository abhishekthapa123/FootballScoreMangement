<?php





include('connection.php');


$tournamentid= $_GET['tournamentid'];
$sql = "DELETE FROM tournaments WHERE  id='{$tournamentid}'";

if (mysqli_query($conn, $sql)) {
header("Location:adminlisttournament.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);






?>