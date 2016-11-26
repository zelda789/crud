<?php
$host = '139.59.226.31';
$user = 'cendana';
$pass = 'cendananr2425';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana_ikhsan_crud');

?>

<?php 
$sql_posisi = "select * from posisi";
$result_posisi = mysql_query($sql_posisi);

// UNTUK BOOTSTRAP

$sql_posisi1 = "select * from posisi";
$result_posisi1 = mysql_query($sql_posisi1);

$sql_kota = "select * from kota";
$result_kota = mysql_query($sql_kota);

// UNTUK BOOTSTRAP
$sql_kota1 = "select * from kota";
$result_kota1 = mysql_query($sql_kota1);


$id = $_GET['id'];
mysql_query($sql);

$sql = "select 
pg.id_pegawai,
pg.nama as nama_pegawai,
pg.telp,
pg.kota_asal,
kl.nama as jenis_kelamin,
po.nama as posisi,
kl.id_kelamin as kelamin_id,
po.id_posisi as posisi_id
	from
pegawai pg, kelamin kl, posisi po, kota
	where
	pg.id_pegawai = '{$id}' and
	pg.jenis_kelamin = kl.id_kelamin and
	pg.id_posisi = po.id_posisi";

$result = mysql_query($sql);
$brs=mysql_fetch_array($result);

?>

          <!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="../css/bootstrap.css">


<!-- <h1>Form Update Data Pegawai</h1> -->


<form action ="proses_update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $brs['id_pegawai'] ?>">

<!-- Nama :<input type="text" name="nama" value="<?php echo $brs['nama_pegawai']?>"><br>

Posisi:
<?php echo $brs['posisi_id'] ?>
 <select name="posisi">
		<?php 
		while($data_posisi = mysql_fetch_array($result_posisi)) {?> 
		<option value="<?php echo $data_posisi['id_posisi']?>"<?php if($brs['posisi_id']==$data_posisi['id_posisi']) echo "selected"?>>
		<?php echo $data_posisi['nama']?>
		</option>
		<?php
		 }
		?>
		</select>
		<br>

Jenis Kelamin
<input type="radio" name="kelamin" value="1" <?php if ($brs['kelamin_id']==1) echo "checked" ?>> Laki-Laki
<input type="radio" name="kelamin" value="2" <?php  if ($brs['kelamin_id']==2)echo "checked"?>> Perempuan
<input type="radio" name="kelamin" value="3"> Laura
<br>

Telepon
<input type="text" name="telepon" value="<?php echo $brs['telp']?>">
<br>

Kota
<?php 
$sql_kota = "select * from kota";
$result_kota = mysql_query($sql_kota)
?>

<select name="kota">
		<?php 
		while($asal_kota = mysql_fetch_array($result_kota)) {?> 
		<option value="<?php echo $asal_kota['id_kota']?>" <?php if($brs['kota_asal']==$asal_kota['id_kota']) echo "selected" ?>>
		<?php echo $asal_kota['nama_kota'] ?>
		</option>
		<?php }
		?>
		</select>
		<br>
		</form>
 -->
							<!-- TABLE BOOTSTRAP -->


<form action ="proses_update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $brs['id_pegawai'] ?>">

<table class="table">
  <thead class="thead-inverse">
    <tr>
     
      <th><h1><center>Form Update Data Pegawai</h1>
</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>NAMA : <input type="text" name="nama" value="<?php echo $brs['nama_pegawai']?>"><br></td>
      
    </tr>
    <tr>
      <td> POSISI :
  <select name="posisi">
		<?php 
		while($data_posisi1 = mysql_fetch_array($result_posisi1)) {?> 
		<option value="<?php echo $data_posisi1['id_posisi']?>"<?php if($brs['posisi_id']==$data_posisi1['id_posisi']) echo "selected"?>>
		<?php echo $data_posisi1['nama']?>
		</option>
		<?php
		 }
		?>
		</select>
		<br></td>
    </tr>
    <tr>
      <td>JENIS KELAMIN : 
<input type="radio" name="kelamin" value="1" <?php if ($brs['kelamin_id']==1) echo "checked" ?>> Laki-Laki
<input type="radio" name="kelamin" value="2" <?php  if ($brs['kelamin_id']==2)echo "checked"?>> Perempuan
<input type="radio" name="kelamin" value="3"> Laura
<br></td>
<tr>
	<td>
		TELPON : <input type="text" name="telepon" value="<?php echo $brs['telp']?>">
<br>
	</td>
</tr>
<tr>
	<td>
		KOTA :<select name="kota">
		<?php 
		while($asal_kota1 = mysql_fetch_array($result_kota1)) {?> 
		<option value="<?php echo $asal_kota1['id_kota']?>" <?php if($brs['kota_asal']==$asal_kota1['id_kota']) echo "selected" ?>>
		<?php echo $asal_kota1['nama_kota'] ?>
		</option>
		<?php }
		?>
		</select>
		<br>
	</td>
</tr>
     
    </tr>
  </tbody>
</table>
<button type="submit" class="btn btn-primary btn-success" name="Tambah Data">UPDATE</button>
<button type="submit" class="btn btn-primary btn-md" name="Tambah Data" <a href="../index.php">KEMBALI</button>
</form>


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src ="css/bootstrap.css"></script>
</form>