<?php

include('connection.php');
$id = $_GET['teamid'];
$tournament_id = $_GET['tournamentid'];
$sql1= "SELECT count('teamname')AS teamname
FROM teams WHERE flag='1' AND  tid = '".$tournament_id."'";
$result = mysqli_query($conn, $sql1);


while($row = mysqli_fetch_assoc($result)) {
$count = $row['teamname'];

if($count %2 == 0)
{
    $group = "A";
}
else{
 $group = "B";
}
} 








$sql = "UPDATE teams SET flag='1', groups= '".$group."' WHERE id='".$id."'";

if (mysqli_query($conn, $sql)) {
  header("Location:listregisterteams.php?tid=".$tournament_id);
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);






?>