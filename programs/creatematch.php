<?php
include('connection.php');
$tid = $_POST['tid'];
$teamA = $_POST['teamA'];
$teamB = $_POST['teamB'];


$teamAscore= $_POST['teamAscore'];
$teamBscore = $_POST['teamBscore'];
$date = date('Y-m-d');

$sql = "INSERT INTO matches (tid, teamA, teamAscore,teamB,teamBscore,datee)
VALUES ('$tid', '$teamA', '$teamAscore','$teamB','$teamBscore','$date')";
if (mysqli_query($conn, $sql)) {
     header("Location:listmymatch1.php?tid=".$tid);
    // header("location:javascript://history.go(-2)");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);






?>