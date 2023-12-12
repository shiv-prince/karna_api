<?php 

include("dbconnection.php");
$con=debconnection();

if(isset($_POST["name"])){
    $name=$_POST["name"];
}
else return;

if(isset($_POST["gender"])){
    $gender=$_POST["gender"];
}
else return;

if(isset($_POST["contact"])){
    $contact=$_POST["contact"];
}
else return;

if(isset($_POST["db"])){
    $db=$_POST["db"];
}
else return;

$query="INSERT INTO `K_User-table`(`uname`, `ugender`, `ucontact`, `udbvalue`) 
VALUES ('$name','$gender','$contact','$db')";

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