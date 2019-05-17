<?php
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    
    header("Location: ../index.html");
}

$username = trim(strtolower($_GET['username']));
$password = trim($_GET['password']);



 $sql = "SELECT * FROM `admins` WHERE user_name='$username' AND user_password='$password';";
 
 include 'connection/uplink.php';

 $query = new connector("estate_users","root","");
 $query->setSql($sql);
 $array = $query->runQuery();
 $returnNo = $query->getReturnNo();
  

if($returnNo > 0){
 
 session_start();
// Set session variables 
$db_key = $array[0]['database_key'];
var_dump($array);
$sql_1 = "SELECT * FROM `db_keys` WHERE value = '$db_key';";

$query_1 = new connector("estate_users","root","");
$query_1->setSql($sql_1);
$_SESSION['access_level'] = $query->runQuery()[0]['access_level'];
// $value = $query->runQuery();
// echo $value['key_access_level'];
}else{
	echo "404";
}

 