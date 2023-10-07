<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./form.css">
    <title>Document</title>
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
                document.getElementById("nameError").innerHTML = " ** please fill first name **";
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
                document.getElementById("nameError2").innerHTML = " ** please fill last name **";
                return false;
            } else {
                var regex = /^[A-Za-z\s-]+$/;
                if (!c.match(regex)) {
                    alert("please enter valid name")
                    return false
                }
            }

            if (d == "") {
                document.getElementById("nameError3").innerHTML = " ** please set password**";

                return false;
            }
            if (d.length < 8) {
                document.getElementById("nameError3").innerHTML = " ** password must be greater than 8 character **";
                return false;
            }
            if (d.length > 15) {
                document.getElementById("nameError3").innerHTML = " ** password must be less than 15 character **";
                return false;
            }
            if (e !== d) {
                document.getElementById("nameError4").innerHTML = " ** not matched **";
            }


            // var phnregex=/[^0-9]/
            // if(f.match(phnregex)){
            //     return true;
            // }else{
            //     document.getElementById("nameError5").innerHTML="** give valid phone number **"
            // }
            var phone_no = document.forms['myfrm']['phone'];
            var numb = String(phone_no.value).charAt(0)
            var first_numb = Number(numb)
            if (isNaN(phone_no.value) || phone_no.value.length != 10 || first_numb < 6) {
                document.getElementById("nameError5").innerHTML = " enter 10 digit phone number & start with 6"
                return false;
            }




            if (b == "") {
                alert("Please enter your email.");
                return false;
            } else {

                var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (!b.match(emailPattern)) {
                    alert("Please enter a valid email address.");
                    return false;
                }
            }


            return true;
        }
    </script>
</head>

<body>



    <div class="container">
        <form action="" method="POST" class="form-inline" onsubmit="return validateFORM()" name="myfrm">
            <div class="title form-group">
                <h1 style="text-align: center;"><b>Register form</b></h1>
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
                    <label for="">Gender</label>*
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
                </div>

                <div class="input_field">
                    <i class="fa fa-phone" style="font-size:20px"></i>
                    <label for="">Phone </label>*
                    <input type="text" class="input form-control" placeholder='Phone' name="phone" id="phone">
                    <span class="redstar"></span><span class="errorspan" id="nameError5"></span></p>
                </div>

                <div class="input_field">
                    <label for="">Address</label>*
                    <textarea name="address" id="" cols="20" rows="2" placeholder='Address' class="textarea"></textarea>
                </div>

                <div class="input_field">
                    <label for="">Select</label>*
                    <select name="status" id="">
                        <option value="not selected">select</option>
                        <!-- <option value="admin">admin</option> -->
                        <option value="user">user</option>
                    </select>
                </div>


                <div class="input_field btn btn-primary">
                    <input style="color: WHITE;" type="submit" value="add" class="btn" name="add">
                </div>

                <br>
                Have an account?
                <a href="login.php">login here</a>

            </div>
        </form>
    </div>


</body>

</html>
<?php
if (isset($_POST['add'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $status = $_POST['status'];


    if ($pwd === $cpwd) {
        // echo "password are matching";




        //    if($fname!="" && $lname !="" && $pwd !="" && $cpwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
        //    {


        $query = "insert into form (fname,lname,password,cpassword,gender,email,phone,address,status) 
                            values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address','$status')";
        $data = mysqli_query($conn, $query);
        if ($data == 1) {
            ?>
                <script>
                    window.location.href='login.php';
                </script>
            <?php


            // header('location:login.php');
        } else {
            echo "fail the data inserted";
        }
    } else {
        echo "<h1><span style='color:red';> Oho! password are not matching</span></h1>";
    }
}

?>