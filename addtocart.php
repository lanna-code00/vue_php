<?php

require 'database.php';

$_POST = json_decode(file_get_contents('php://input'), true);
 
  $id = $_POST['id'];

  $name = $_POST['name'];
  
  $image = $_POST['picture'];

  $quantity = $_POST['quantity'];

  $price = $_POST['price'];

  $total = $_POST['total'];

  $user_id = $_POST['user_id'];



  $sql = "INSERT INTO added_to_cart (`food_id`,`food_name`, `food_picture`,`food_price`, `food_quantity`, `food_total`, `user_id`) 
          VALUES ($id,'$name','$image','$price','$quantity','$total', $user_id)";
        
  var_dump($sql);
  echo mysqli_query($mysqli, $sql);

?>
