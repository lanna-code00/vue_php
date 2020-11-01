<?php
require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$query = "DELETE FROM food_table WHERE food_id = $id";
$del_food = mysqli_query($mysqli,$query);
 echo json_encode($del_food);