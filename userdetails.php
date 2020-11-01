<?php
require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$status = $_POST['status'];

$insert = "INSERT INTO `userdetail`(`name`, `lastname`,`phone`,`city`, `address`, `status`) 
           VALUES ('$name', '$lastname', '$phone','$city','$address', '$status')";
var_dump($insert);
echo mysqli_query($mysqli, $insert);
?>

