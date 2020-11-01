<?php

require 'database.php';

$_POST = json_decode(file_get_contents('php://input'), true);

$sql = "SELECT COUNT(*) FROM added_to_cart";
var_dump($sql);
$allquery = mysqli_query($mysqli, $sql);
echo json_encode(mysqli_fetch_all($allquery, MYSQLI_ASSOC));