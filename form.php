<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        label {
            font-weight: bold;
            color: black;
        }

        span {
            color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./form.css">
    <script>
        function validateFORM() {
            // var regex = /^[A-Za-z\s-]+$/;
            // var regex=/^a-zA-Z/;


            var a = document.getElementById("fname").value;
            var b = document.getElementById("email").value;
            var c = document.getElementById("lname").value;
            var d = document.getElementById("password").value;
            var e = document.getElementById("cpassword").value;
            // var f = document.getElementById("phone").value;


            if (a == "") {
                alert("please fill first name");
                // document.getElementById("nameError").innerHTML = " ** please fill first name **";
                return false;
            } else {
                var regex = /^[A-Za-z\s-]+$/;
                if (!a.match(regex)) {
                    alert("please enter valid name")
                    return false
                }
            }
            // if (a.length < 3) {
            //     document.getElementById("nameError").innerHTML = " ** user name must be 3 character **";
            //     return false;
            // }
            // if (a.length > 50) {
            //     document.getElementById("nameError").innerHTML = " ** user name must be less than 50 character **";
            //     return false;
            // }
            // if (a.match(regex)) {


            //     true;
            // }

            if (c == "") {
                alert("please fill last name");
                // document.getElementById("nameError2").innerHTML = " ** please fill last name **";
                return false;
            } else {
                var regex = /^[A-Za-z\s-]+$/;
                if (!c.match(regex)) {
                    alert("please enter valid name")
                    return false
                }
            }

            if (d == "") {
                alert("please set password");
                // document.getElementById("nameError3").innerHTML = " ** please set password**";

                return false;
            }
            
            if (d.length < 8) {
                alert("password must be greater than 8 character")
                // document.getElementById("nameError3").innerHTML = " ** password must be greater than 8 character **";
                return false;
            }
            if (d.length > 15) {
                alert("password must be less than 15 character")
                // document.getElementById("nameError3").innerHTML = " ** password must be less than 15 character **";
                return false;
            }
            if (e !== d) {
                alert("not matched ")
                // document.getElementById("nameError4").innerHTML = " ** not matched **";
            }


            // var phnregex=/[^0-9]/
            // if(f.match(phnregex)){
            //     return true;
            // }else{
            //     document.getElementById("nameError5").innerHTML="** give valid phone number **"
            // }
           




            if (b == "") {
                alert("please fill email address")
                // document.getElementById("nameError6").innerHTML = " ** please fill email address **";
                return false;
            } else {

                var emailPattern = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                if (!b.match(emailPattern)) {
                    alert("Please enter a valid email address")
                    
                    // document.getElementById("nameError6").innerHTML = "** Please enter a valid email address **";
                    return false;
                }
            }
            var phone_no = document.forms['myfrm']['phone'];
            var numb = String(phone_no.value).charAt(0)
            var first_numb = Number(numb)
            if (isNaN(phone_no.value) || phone_no.value.length != 10 || first_numb < 6) {
                alert("enter 10 digit phone number & start with above 6")
                // document.getElementById("nameError5").innerHTML = " enter 10 digit phone number & start with above 6"
                return false;
            }


            return true;
        }
    </script>

</head>

<body>
    <div class="container">
        <form action="" method="POST" class="form-inline" onsubmit="return validateFORM() && validatePASS()" name="myfrm" autocomplete="off">
            <div class="title form-group">
                <h3 style="text-align: center;"><b>Register form</b></h3>
            </div>
            <div class="form ">
                <div class="input_field ">
                    <i class="fa fa-address-book" style="font-size:27px"></i>
                    <label for="">First Name</label>*

                    <input type="text" class="input form-control" name="fname" placeholder='First Name' id="fname">
                    <span class="redstar"></span><span class="errorspan" id="nameError"></span></p>
                </div>
                <div class="input_field">
                    <i class="fa fa-address-book" style="font-size:30px"></i>
                    <label for="">Last Name</label>*
                    <input type="text" class="input form-control" name="lname" placeholder='Last Name' id="lname">
                    <span class="redstar"></span><span class="errorspan" id="nameError2"></span></p>
                </div>
                <div class="input_field">
                    <i class="fa fa-lock" style="font-size:30px"></i>
                    <label for="">Password</label>*

                    <input type="password" class="input form-control" name="password" placeholder=' Password' id="password">
                    <span class="redstar"></span><span class="errorspan" id="nameError3"></span></p>
                </div>
                <div class="input_field">
                    <i class="fa fa-lock" style="font-size:30px"></i>
                    <label for="">Confirm Password</label>*
                    <input type="password" class="input form-control" placeholder='Confirm Password' name="conpassword" id="cpassword">
                    <span class="redstar"></span><span class="errorspan" id="nameError4"></span></p>
                </div>



                <div class="input_field">
                    <label for="">Gender</label>
                    <select name="gender" id="">
                        <option value="not selected">select</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>


                <div class="input_field">
                    <i class="fa fa-envelope" style="font-size:23px"></i>
                    <label for="">Email </label>*
                    <input type="text" class="input form-control" placeholder='Email' name="email" id="email">
                    <span class="redstar"></span><span class="errorspan" id="nameError6"></span></p>
                </div>

                <div class="input_field">
                    <i class="fa fa-phone" style="font-size:20px"></i>
                    <label for="">Phone </label>*
                    <input type="text" class="input form-control" placeholder='Phone' name="phone" id="phone">
                    <span class="redstar"></span><span class="errorspan" id="nameError5"></span></p>
                </div>

                <div class="input_field">
                    <label for="">Address</label>
                    <textarea name="address" id="dom" cols="20" rows="2" placeholder='Address' class="textarea"></textarea>
                </div>

                <div class="input_field">
                    <label for="">Select</label>
                    <select name="status" id="stat">
                        <option value="not selected">select</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </div>


                <div class="input_field btn btn-primary">
                    <input style="color: WHITE;" type="submit" value="Register" class="btn" name="register">
                </div>

                <br>
                Have an account?
                <a href="login.php" class="log">login here</a>

            </div>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $("#fname,#lname,#dom,#phone,#email,#password,#cpassword").focus(function(){
                $(this).css("background","hotpink");
            });
            $("#fname, #lname,#dom,#phone,#email,#password,#cpassword").blur(function(){
                $(this).css("background","");
            });
            $("#stat").change(function(){
                $(this).css("background","yellow");
            });
            $("#email").select(function(){
                $(this).css("background","yellow");
            });
        });
    </script>
</body>

</html>

<?php
error_reporting(0);
if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $status = $_POST['status'];



    $sql = "SELECT * FROM form WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    // print_r($result);
    $present = mysqli_num_rows($result);


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($present > 0) {
?>
            <script>
                alert("this email already exists!")
            </script>
            <?php


        } else {
            if ($pwd === $cpwd) {
                $query = "INSERT INTO form (fname, lname, password, cpassword, gender, email, phone, address, status) 
                      VALUES ('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address', '$status')";

                $data = mysqli_query($conn, $query);
                if ($data) {
                    ?>
                    <script>
                         alert( "Data inserted successfully!");
                        window.location.href='login.php';
                    </script>
                <?php

                   
         
                    // header("Location: login.php");
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                die();
            } else {
                echo "Password and Confirm Password do not match!";
            }
        }
    }
}

?>
