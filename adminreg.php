<?php
require 'database.php';

$msg = "";

  $image = $_FILES['myfile']['name'];
  
  $firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
  $address = mysqli_real_escape_string($mysqli, $_POST['address']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);


  $target = "adminpics/".basename($image);

  echo json_encode($target);

  if ($_FILES["myfile"]["size"] > 800000) {
    echo "Sorry, your file is too large.";
  } 
  
  else{

  $sql = "INSERT INTO adminreg (firstname, lastname, username, email, phone, address, password, picture) 
          VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$address', '$password', '$image')";
  // execute query
  echo mysqli_query($mysqli, $sql);
  // var_dump($check);
      }

  if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }

