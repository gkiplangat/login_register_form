<?php
$server = "localhost";
$username ="root";
$password ="";
$database ="login";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("<sript>alert('Connection Failed.')</sript>");
}
?>