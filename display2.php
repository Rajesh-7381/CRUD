<?php
include("connection.php");
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        a.buy {
            /* position: fixed; */

            /* border: 3px solid green; */
            color: blue;
            /* font-size: small; */
            text-decoration: none;
            top: 20px;
            right: 20px;
            /* left: 252px; */
            float: right;
            font-weight: bold;



        }

        a.buy:hover {
            color: white;
            text-decoration: underline;
            left: 252px;
            float: right;
            /* position: fixed;                 */
        }

        a.add {
            color: blue;
            /* font-size: small; */
            text-decoration: none;
            top: 20px;
            right: 80px;
            /* left: 252px; */
            float: right;
            font-weight: bold;

        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: #D071f9;">
    <a href="logout.php" class="buy log">Logout</a>
    <h1>this is user</h1><?php echo $_SESSION['email_name'] ?>
    

    <?php
    $query = "select * from form ";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);


    echo "<h1>{$total}</h1>";


    // $result=mysqli_fetch_assoc($data);

    if ($total != 0) {
        // echo "table hasrecords";
        echo "<br>";

    ?>
        <h2 style="text-align: center;"><mark>Table Data</mark></h2>
        <center>
            <table border="6" class="table table-dark " style="width: 90px;">
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



            while ($result = mysqli_fetch_assoc($data)) {
                // echo $result['fname']." ". $result['lname']. " ". $result['password']." ". $result['cpassword']." ".$result['gender']." " .$result['email']. " ".$result['phone']." ".$result['address']."<br>";
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



                    </td>
                    
                </tr>    
                    ";
            }
        } else {
            echo "no records found";
        }
        // for($i=0;$i>$result;$i++){
        //     // $a=1;

        // echo $result['fname']." ". $result['lname']. " ". $result['password']." ". $result['cpassword']." ".$result['gender']." " .$result['email']. " ".$result['phone']." ".$result['address'];
        // }
            ?>
            </table>
        </center>


</body>

</html>