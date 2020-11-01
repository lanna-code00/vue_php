<?php
require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);
// $msg = "";

// $image = $_FILES['food_picture']['name'];

$id = $_POST['food_id'];
$foodtime = $_POST['food_time'];
$fooddate = $_POST['food_date'];
$foodname = $_POST['food_name'];
$foodprice = $_POST['food_price'];
$foodquantity = $_POST['food_quantity'];
$fooddetail = $_POST['food_detail'];

  $sql ="UPDATE food_table SET food_time = '$foodtime', food_date = '$fooddate', food_name = '$foodname',
            food_price = '$foodprice', food_quantity = '$foodquantity', food_detail = '$fooddetail'
            WHERE `food_id` = $id";
            var_dump($sql);
      echo mysqli_query($mysqli, $sql);
