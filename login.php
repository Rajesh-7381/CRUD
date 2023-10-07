

<!-- session_start(); -->



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

    <link rel="stylesheet" href="./login.css">
</head>
<body>

    <div class="login-box">

        <form action="#" method="POST" autocomplete="off">
            <h2>Login</h2>

            Email:
            <input type="text" name="email_name" placeholder="enter your email">
            <br><br>
            Password:
            <input type="password" name="pass_name" placeholder="enter your password">
            <br><br>
            <input type="submit" name="login" value="Login" class="login" style="border: 2px solid blue;">

            <input type="submit" name="signup" value="signup" class="signup">
        </form>
    </div> -->


    


 

<!-- </body>

</html> -->


<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>
</head>

<body>
    <div class="login-box">
        <form action="#" method="POST" autocomplete="off">
            <h2>Login</h2>
            Email:
            <input type="text" name="email_name" placeholder="Enter your email">
            <br><br>
            Password:
            <input type="password" name="pass_name" placeholder="Enter your password">
            <br><br>
            <input type="submit" name="login" value="Login" class="login" style="border: 2px solid blue;">
            <input type="submit" name="signup" value="Signup" class="signup">
        </form>
    </div>

    <?php
    include('connection.php');
    error_reporting(0);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['login'])) {
            $username = $_POST['email_name'];
            $password = $_POST['pass_name'];
            $query = "SELECT * FROM form WHERE email='$username' AND password='$password'";
            $data = mysqli_query($conn, $query);
            $total = mysqli_fetch_array($data);

            if ($total['status'] == 'user') {
                $query2 = "SELECT id FROM form WHERE email = '$username' AND password = '$password'";
                $data2 = mysqli_query($conn, $query2);
                
                if ($data2 && mysqli_num_rows($data2) === 1) {
                    $row = mysqli_fetch_assoc($data2);
                    $userId = $row['id'];
                    $_SESSION['userId'] = $userId; 
                   
                     
                     
                    header('Location: view.php');  
                    exit();
                } else {
                    
                    echo "Invalid username or password.";
                }
            } elseif ($total['status'] == 'admin') {
                header('Location: display.php');  
                exit();
            }
        }
    }
    if(isset($_POST['signup'])){
        header('location:form.php');
    }
    ?>
</body>

</html>
