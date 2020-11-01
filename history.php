<?php
require 'database.php';
// $query = "SELECT food_name, food_price, food_quantity FROM added_to_cart 
//           join users on added_to_cart.user_id = users.user_id";

$query = "SELECT added_to_cart.table_id,
added_to_cart.food_name, added_to_cart.food_price, added_to_cart.food_quantity, users.user_id
FROM 
added_to_cart
JOIN 
users 
ON
users.user_id=added_to_cart.user_id";

$allquery = mysqli_query($mysqli, $query);

$newquery = mysqli_fetch_all($allquery, MYSQLI_ASSOC);

echo json_encode($newquery);


?>