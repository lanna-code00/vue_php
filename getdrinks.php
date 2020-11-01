<?php
require 'database.php';

$sqlQuery = "SELECT * FROM drink_table";
$allquery = mysqli_query($mysqli, $sqlQuery);
echo json_encode(mysqli_fetch_all($allquery, MYSQLI_ASSOC));
