<?php

include('connection.php');
$matchid= $_POST['teamid'];
$tid = $_POST['tid'];
$teamAscore = $_POST['teamAscore'];
$teamBscore = $_POST['teamBscore'];
$sql = "UPDATE matches SET teamAscore='{$teamAscore}',teamBscore='{$teamBscore}' WHERE id='{$matchid}'";

if (mysqli_query($conn, $sql)) {
  header("Location:listmymatch1.php?tid=".$tid);
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);