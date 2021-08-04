<?php
include('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$type  =  $_POST['type'];
$sql = "SELECT * FROM user where username = '".$username."' AND pass= '".$password."' AND usertype='".$type."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['type']=$row['usertype'];
        $_SESSION['uid']=$row['id'];
        header("Location:adminpannel.php");
      }
}
else{
    $msg="The username or password is incorrect!!";
    header("Location:loginform.php?msg=".$msg);
}

?>

