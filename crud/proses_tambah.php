<?php
$host = '139.59.226.31';
$user = 'cendana';
$pass = 'cendananr2425';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana_ikhsan_crud');
// optional
date_default_timezone_set('Asia/Jakarta');

$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$kelamin = $_POST['kelamin'];
$telepon = $_POST['telepon'];
$kota = $_POST['kota'];


$id = md5(date('ymdhms').rand());

$sql ="insert into pegawai(id_pegawai,nama,id_posisi,jenis_kelamin, telp, kota_asal)
	values('$id', '$nama', '$posisi', $kelamin, '$telepon', '$kota')";

	mysql_query($sql);

	header("Location: EDIT.php");
?>