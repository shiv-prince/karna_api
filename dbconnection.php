<?php 

function debconnection()
{
    $con=mysqli_connect("localhost","root","","karna");
    return $con;
}


?>