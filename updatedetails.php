<?php

require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];

$sql = "UPDATE userdetail SET status='done' WHERE detail_id = $id";
var_dump($sql);
echo mysqli_query($mysqli, $sql);
