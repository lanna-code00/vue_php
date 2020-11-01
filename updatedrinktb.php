<?php

require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE drink_table SET drink_quantity='$quantity' WHERE drink_id= $id";
var_dump($sql);
echo mysqli_query($mysqli, $sql);
