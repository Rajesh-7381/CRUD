<?php

include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // error_reporting(0);
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="select * from form where id='$id'";
        $data=mysqli_query($conn,$sql);
        $total=mysqli_num_rows($data);
        // echo $total;
    
    }
    if($total!=0){
        // echo "table hasrecords";
        echo "<br>";
    
        ?>
            <h2 style="text-align: center;"><mark>Table Data</mark></h2>
            <center ><table border="6"  class="table table-dark " style="width: 90px;">
                <tr style="color: hotpink;">
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
    
                
                
                </tr>
        <?php
       
        while($result=mysqli_fetch_assoc($data)){
        
            echo  "<tr style='color: orange; ' >
                        <td>$result[id]</td>
                        <td>$result[fname]</td>
                        <td>$result[lname]</td>
                        <td>$result[password]</td>
                        <td>$result[cpassword]</td>
                        <td>$result[gender]</td>
                        <td>$result[email]</td>
                        <td>$result[phone]</td>
                        <td>$result[address]</td>
    
    
                       
                        
                    </tr>    
                        ";
        }
    }else{
        echo "no records found";
    }
    ?>
    </table>
            </center>
    ?>
</body>
</html>