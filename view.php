<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        th{
            color: red;
            text-align: center;
        }
        td{
            color:aqua
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h2>this is user page</h2>
</body>
</html>


<?php
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];

    $query = "SELECT * FROM form WHERE id = '$userId'";
    $data = mysqli_query($conn, $query);
    $userData = mysqli_fetch_assoc($data);
   

    if ($userData) {
        
        echo "<center><table border='6' class='table table-dark ' style='width: 90px;'>";
        echo "<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        </tr>";
        
        // echo "<tr>";
        echo "<td>" . $userData['id'] . "</td>";
        echo "<td>" . $userData['fname'] . "</td>";
        echo "<td>" . $userData['lname'] . "</td>";
        echo "<td>" . $userData['email'] . "</td>";
        echo "<td>" . $userData['gender'] . "</td>";
        echo "<td>" . $userData['phone'] . "</td>";
        echo "<td>" . $userData['address'] . "</td>";
        echo "</tr>";

        echo "</center></table>";
        
    } else {
        echo "User ID not found.";
    }
}
?>