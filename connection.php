<?php
$servername="localhost";
$username="root";
$password="";
$dbname="responsiveform3";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo "connection sucess";
}
else{
    echo "connection failed".mysqli_connect_error();
}
?>