<?php

session_start();

include_once('crud/database_crud.php');
mysql_select_db('cendana_ikhsan_crud');

$user = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "select * from login where username = '{$user}'";
$query = mysql_query($sql);
if(mysql_num_rows($query) == 1){
	$dataLoginDB = mysql_fetch_array($query);

	if($pass == $dataLoginDB['password']){

		$_SESSION['userdata'] = $dataLoginDB;
		header('Location: crud/EDIT.php');
	}else{
		header('Location: index.php');
	}

}else{
	header('Location: index.php');
}

?>