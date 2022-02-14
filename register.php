<?php
include 'config.php';
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header("Location: Welcome.php");
}
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = md5($_POST['lname']);
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form -Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="First Name" name="fname"  value="<?php echo $_POST['fname'];?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Last Name" name="lname"  value="<?php echo $_POST['lname'];?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  value="<?php echo $_POST['email'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password"  value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder=" Confirm Password" name="cpassword"  value="<?php echo $_POST['cpassword'];?>" required>
            </div>
            <div class="input-group">
               <button name="submit" class="btn">Sign Up</button>
            </div>
            <p class="login-register-text">Already have an Account ? <a href="index.php">login Here</a></p>
        </form>
    </div>
</body>
</html>