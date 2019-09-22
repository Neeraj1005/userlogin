<?php 
require_once('config.php');
echo 'hello form js';
$sql ="SELECT * FROM users";
$stmtselect =$db->prepare($sql);
$result = $stmtselect->execute([]);

if($result){
	echo 'success';
}else{
	echo 'THere is an errors';
}