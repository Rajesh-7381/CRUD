<?php
include("connection.php");
$id = $_GET['id'];
// echo $_GET['id'];
$query = "select * from form where id='$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="update.css">

</head>

<body>
    <div class="container">
        <form action="#" method="POST" class="form-inline">
            <div class="title form-group ">
               <h2 class="cd">Update Form</h2>
            </div>
            <div class="form ">
                <div class="input_field ">
                    <label for="">first name</label>
                    <input type="text" class="input form-control" name="fname" value="<?php echo $result['fname']; ?>">
                </div>
                <div class="input_field">
                    <label for="">last name</label>
                    <input type="text" class="input" name="lname" value="<?php echo $result['lname']; ?>">
                </div>
                <div class="input_field">
                    <label for="">password</label>
                    <input type="password" class="input" name="password" value="<?php echo $result['password']; ?>">
                </div>
                <div class="input_field">
                    <label for="">confirm password</label>
                    <input type="password" class="input" name="conpassword" value="<?php echo $result['cpassword']; ?>">
                </div>


                <div class="input_field">
                    <label for="">Gender</label>
                    <select name="gender" id="">
                        <!-- <option value="not selected">select</option>
                    <option value="male">male</option> -->

                        <option value='male' <?= $result['gender'] == 'male' ? 'selected' : '' ?>>male</option>
                        <option value='female' <?= $result['gender'] == 'female' ? 'selected' : '' ?>>female</option>"



                    </select>
                </div>
                <div class="input_field">
                    <label for="">email </label>
                    <input type="text" class="input" name="email" value="<?php echo $result['email']; ?>">
                </div>

                <div class="input_field">
                    <label for="">phone </label>
                    <input type="text" class="input" name="phone" value="<?php echo $result['phone']; ?>">
                </div>

                <div class="input_field">
                    <label for="">Address</label>
                    <textarea name="address" id="" cols="30" rows="4" class="textarea"><?php echo $result['address']; ?></textarea>
                </div>

                </div>

                <div class="input_field btn btn-primary">
                    <input type="submit" value="update" class="btn " name="update">
                </div>



            </div>
        </form>
    </div>
</body>

</html>


<?php
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    $query = "update form set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender',email='$email',phone='$phone',address='$address' where id='$id'";
    $data = mysqli_query($conn, $query);
    echo $data;
    if ($data) {
        echo "updated record";
        header('location:display.php');
?>
        <!-- <<meta http-equiv = "refresh" content = "2; url = http://localhost:8000/php/ajatus/display.php"/> -->
<?php
    } else {
        echo "fail";
    }
    // }else{
    //     echo "<span style='color:red';> Oho! please fill the form";

    // }
}
?>