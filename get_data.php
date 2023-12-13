<?php
include("dbconnection.php");
$con=debconnection();

$query="SELECT * FROM `K_User-table` ";

$exe=mysqli_query($con, $query);

$arr=[];

while($row = mysqli_fetch_array($exe)){
    $arr[]=$row;
}

print(json_encode($arr))
?>