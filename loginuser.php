<?php
session_start();
include_once("database.php");
$_POST = json_decode(file_get_contents('php://input'), true);

$username =  $_POST['username'];
$password =  $_POST['password'];


    $sql = "SELECT * from users where username='$username' and password='$password'";
 
	$check = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_all($check, MYSQLI_ASSOC);

	foreach ($row as $value) {
        $_SESSION['user_id'] = $value['user_id'];
        echo  $_SESSION['user_id'];
        
    }
// if(isset($_SESSION['user_id'])){
//     $res ='{"success": true}';
//     echo $_SESSION['user_id'];
// }
// else{
//     $res ='{"success": false}';
// }
// if($row ){
//     $res = array('success' => true);
// }else{
//     $res = array('success' => false);
// }

?>