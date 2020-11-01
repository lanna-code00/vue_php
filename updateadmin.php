<?php

require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE adminreg SET firstname ='$firstname', lastname='$lastname', username='$username', email='$email', phone='$phone', address='$address'
 WHERE admin_id= $id";
var_dump($sql);
echo mysqli_query($mysqli, $sql);
