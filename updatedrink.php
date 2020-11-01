<?php
require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['drink_id'];
$drinkname = $_POST['drink_name'];
$drinkprice = $_POST['drink_price'];
$drinkquantity = $_POST['drink_quantity'];

  $sql ="UPDATE drink_table SET drink_name = '$drinkname',
            drink_price = '$drinkprice', drink_quantity = '$drinkquantity'
            WHERE `drink_id` = $id";
            var_dump($sql);
      echo mysqli_query($mysqli, $sql);
