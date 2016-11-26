<?php

$host = '139.59.226.31';
$user = 'cendana';
$pass = 'cendananr2425';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana_ikhsan_crud');

$id = $_GET['id'];
mysql_query($sql);



$sql = "select 
pg.nama as nama_pegawai,
pg.telp,
kota.nama_kota,
kl.nama as jenis_kelamin,
po.nama as posisi
	from
pegawai pg, kelamin kl, posisi po, kota
	where
	pg.id_pegawai = '{$id}' and
	pg.jenis_kelamin = kl.id_kelamin and
	pg.id_posisi = po.id_posisi and
	pg.kota_asal = kota.id_kota";

	$result = mysql_query ($sql);
	$data = mysql_fetch_array($result); 


?>
<link rel="stylesheet" href="../css/bootstrap.css">
<br>
<!-- NAMA : <?php echo $data['nama_pegawai'] ?> <br>
No telp : <?php echo $data['telp'] ?> <br>
Alamat : <?php echo $data['nama_kota'] ?> <br>
Jenis Kelamin : <?php echo $data['jenis_kelamin'] ?> <br>
Posisi : <?php echo $data['posisi'] ?> <br> -->
 
<div class="container">
  <h2>Detail Pegawai</h2>
  <p>Berikut daftar detail pegawai</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NAMA</th>
        <th>NO. TELP</th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>POSISI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php echo $data['nama_pegawai'] ?></td>
        <td><?php echo $data['telp'] ?> </td>
        <td><?php echo $data['nama_kota'] ?></td>
        <td><?php echo $data['jenis_kelamin'] ?></td>
        <td><?php echo $data['posisi'] ?></td>
      </tr>
     
    </tbody>
  </table>
  <button type="button" class="btn btn-primary btn-success"> <a href ="EDIT.php">KEMBALI</button></a>
</div>




<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src ="css/bootstrap.css"></script>