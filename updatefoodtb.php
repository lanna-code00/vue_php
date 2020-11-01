<?php

require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE food_table SET food_quantity='$quantity' WHERE food_id= $id";
var_dump($sql);
echo mysqli_query($mysqli, $sql);
