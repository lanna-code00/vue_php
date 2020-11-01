<?php
require 'database.php';
$sql = "SELECT * FROM adminreg";
$newsql = mysqli_query($mysqli, $sql);
echo json_encode(mysqli_fetch_all($newsql, MYSQLI_ASSOC));

?>