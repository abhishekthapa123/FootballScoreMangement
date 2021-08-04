<?php

include('connection.php');

$sql= "SELECT count('teamname')AS teamname
FROM teams WHERE tid = '10' AND flag='1'";
$result = mysqli_query($conn, $sql);


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
print($group);



?>