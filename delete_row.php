<?php
include("dbconnection.php");
$con=debconnection();


if(isset($_POST["contact"])){
    $contact=$_POST["contact"];
}else return;

$query="DELETE FROM `K_User-table` WHERE ucontact = '$contact' ";

$exe=mysqli_query($con, $query);

$arr=[];
if($exe){
    $arr["Success"]="true";
}
else{
    $arr["Success"]="false";
}

print(json_encode($arr));

?>