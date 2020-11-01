<?php
require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
echo $password;

$insert = "INSERT INTO `users`(`name`, `username`, `email`, `phone`, `password`) 
           VALUES ('$name','$username','$email','$phone','$password')";
var_dump($insert);
echo mysqli_query($mysqli, $insert);
?>

