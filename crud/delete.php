<?php
$host = '139.59.226.31';
$user = 'cendana';
$pass = 'cendananr2425';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana_ikhsan_crud');


$id = $_GET['id'];
// echo "anda akan melakukan delete terhadap id " .$id;

$sql = "delete from pegawai where id_pegawai = '{$id}'";


mysql_query($sql);
echo "sukses melakukan id " . $id;
// header('location: index.php');
?>