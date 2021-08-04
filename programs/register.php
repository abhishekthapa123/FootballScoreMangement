<?php
session_start();
include('connection.php');
error_reporting(0);
$uid = $_SESSION['uid'];

$tournament_id = $_POST['tid'];
$team_name  = $_POST['tname'];

$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder="upload/".$filename;

move_uploaded_file($tempname,$folder);
$sql1 = "SELECT * FROM teams where flag='1' AND tid= '{$tournament_id}'AND teamname='".$team_name."'";
$result = mysqli_query($conn, $sql1);


if(mysqli_num_rows($result) > 0) {

$msg="This team is already registerd!!";

header("Location:registerform.php?msg=".$msg ."& tid=".$tournament_id);

}

else{
$sql2 = "SELECT * FROM teams where flag='1' AND tid= '{$tournament_id}'AND userid='".$uid."'";
$result1 = mysqli_query($conn, $sql2);

if(mysqli_num_rows($result1) > 0) {

 
   $msg="The user has already registerd in this Tournament!!";//

   header("Location:registerform.php?msg=".$msg ."& tid=".$tournament_id);
  }
  else
  {
    insertteam($uid,$tournament_id,$team_name,$folder,$conn);
  }
}









function insertteam($uid,$tournament_id,$team_name,$folder,$conn)
{
$sql = "INSERT INTO teams (userid,tid,teamname,voucher)
VALUES ('$uid','$tournament_id', '$team_name','$folder')";

if (mysqli_query($conn, $sql)) {
  $msg ="Your request has been sent to host for verfication wait for sometime!!";

 header("Location:listtournament.php?msg=".$msg);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>