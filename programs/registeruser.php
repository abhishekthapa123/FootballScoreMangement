<?php
include('connection.php');
$username= $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user where username='{$username}'" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $msg ="This username is already exists!!";
  header("Location:registeruserform.php?msg=".$msg);

  
} else {
  insert($username,$password,$conn);
}
function  insert($username,$password,$conn)
{
    $sql = "INSERT INTO user (username, pass, usertype)
VALUES ('$username', '$password', 'user')";

if (mysqli_query($conn, $sql)) {
  header("Location:loginform.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

mysqli_close($conn);
?>