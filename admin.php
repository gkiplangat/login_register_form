<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Welcome - Baba System</title>
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="add_product.php">Add product</a></li>
  <li><a href="#contact">View Product</a></li>
  <li><a href="#about">About</a></li>
</ul>
    <h1>Admin Page</h1> </br>
    <?php echo " <h1>Welcome ". $_SESSION['username']."</h1>";?>
    <a href="logout.php">Logout</a>
</body>
</html>