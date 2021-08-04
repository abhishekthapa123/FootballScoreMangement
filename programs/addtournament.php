
<?php
session_start();
include('connection.php');
$tournament_name = $_POST['tname'];
$winning_price=$_POST['wprice'];
$registration_fees = $_POST['rfees'];
$date  =$_POST['date'];
$sql1 = "SELECT * FROM tournaments where flag='1' AND tname='".$tournament_name."'";
$result = mysqli_query($conn, $sql1);
if(mysqli_num_rows($result) > 0) {

$msg="This tournament is already registerd!!";
header("Location:addtournamentform.php?msg=".$msg);
}
else {
  inserttournament($tournament_name,$winning_price,$conn,$registration_fees,$date);

}



















function inserttournament($tournament_name,$winning_price,$conn,$registration_fees,$date)
{

$user_id = $_SESSION['uid'];

$sql = "INSERT INTO tournaments (user_id,tname, winning_price, fees,schedule)
VALUES ('$user_id','$tournament_name','$winning_price','$registration_fees','$date')";

if (mysqli_query($conn, $sql)) {
$msg ="Your request has been sent to superadmin wait for sometime!!";
  header("Location:mytournamentlist.php?msg=".$msg);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

