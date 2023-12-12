<?php 

function debconnection()
{
    $con=mysqli_connect("nbhs.cy4slgsnso27.ap-south-1.rds.amazonaws.com","admin","nbhsawsdb","NBHS");
    return $con;
}


?>