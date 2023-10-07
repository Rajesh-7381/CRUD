
<?php
include("connection.php");
$id=$_GET['id'];
echo "<br>";

$query="delete from form where id='$id' ";

$data=mysqli_query($conn,$query);

if($data){
   
    header('location:display.php');
    // echo "sucessfully deleted your data";
    
}
else{
    echo "not deleted data ";
}

?>