<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana');

?>

<?php 
$sql_posisi = "select * from posisi";
$result_posisi = mysql_query($sql_posisi)
?>
<h1>Form Tmbah Data Pegawai</h1>
<a href="index.php">KEMBALI</a>
<form action ="proses_tambah.php" method="POST">

Nama :<input type="text" name="nama"><br>


Posisi <select name="posisi">
		<?php 
		while($data_posisi = mysql_fetch_array
		($result_posisi)) {?> 
		<option value="<?php echo $data_posisi['id_posisi']?>">
		<?php echo $data_posisi['nama'] ?>
		</option>}
		<?php }
		?>
		</select>
		<br>

Jenis Kelamin
<input type="radio" name="kelamin" value="1"> Laki-Laki
<input type="radio" name="kelamin" value="2"> Perempuan
<input type="radio" name="kelamin" value="3"> Laura
<br>

Telepon
<input type="text" name="telepon">
<br>

Kota
<?php 
$sql_kota = "select * from kota";
$result_kota = mysql_query($sql_kota)
?>

<select name="kota">
		<?php 
		while($asal_kota = mysql_fetch_array
		($result_kota)) {?> 
		<option value="<?php echo $asal_kota['id_kota']?>">
		<?php echo $asal_kota['nama_kota'] ?>
		</option>}
		<?php }
		?>
		</select>
		<br>

<input type="submit" name="Tambah Data"><br>
</form>

