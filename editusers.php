<?php

require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE users SET name='$name', username='$username', email='$email', phone='$phone' WHERE user_id= $id";
var_dump($sql);
echo mysqli_query($mysqli, $sql);
