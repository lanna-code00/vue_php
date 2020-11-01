<?php
require 'database.php';

$msg = "";

  $image = $_FILES['myfile']['name'];
  $name = mysqli_real_escape_string($mysqli, $_POST['myname']);
  $price = mysqli_real_escape_string($mysqli, $_POST['myprice']);
  $quantity = mysqli_real_escape_string($mysqli, $_POST['myquantity']);

  $target = "uploads/".basename($image);

  echo json_encode($target);

  if ($_FILES["myfile"]["size"] > 800000) {
    echo "Sorry, your file is too large.";
  } 
  
  else{

  $sql = "INSERT INTO drink_table (drink_name, drink_price, drink_quantity, drink_picture) 
          VALUES ('$name', '$price', '$quantity','$image')";
  echo mysqli_query($mysqli, $sql);
}

  if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }

