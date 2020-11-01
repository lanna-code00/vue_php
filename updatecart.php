<?php

require 'database.php';

$_POST = json_decode(file_get_contents('php://input'), true);


$id = $_POST['id'];

$name = $_POST['name'];
  
$image = $_POST['picture'];

$quantity = $_POST['quantity'];

$price = $_POST['price'];

$total = $_POST['total'];


$sql = "UPDATE added_to_cart SET food_quantity='$quantity', food_total='$total' WHERE food_id= '$id'";
var_dump($sql);
echo mysqli_query($mysqli, $sql);
