<?php
session_start();
include_once("database.php");
$_POST = json_decode(file_get_contents('php://input'), true);

$username =  $_POST['username'];
$password =  $_POST['password'];


    $sql = "SELECT * from adminreg where username='$username' and password='$password'";
 
	$check = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_all($check, MYSQLI_ASSOC);

	foreach ($row as $value) {
        $_SESSION['admin_id'] = $value['admin_id'];        
    }
    if(isset($_SESSION['admin_id'])){
    $res ='{"success": true}';
}
else{
    $res ='{"success": false}';
}
if($row ){
    $res = array('success' => $_SESSION['admin_id']);
}else{
    $res = array('success' => false);
}
echo json_encode($res);

?>