<?php 
require_once('config.php');


$username = $_POST['username'];
$password = $_POST['password'];

$sql ="SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect =$db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		echo "1";
	}else{
		echo "There no user fot that combo";
	}
}else{
	echo 'THere is an errors';
}