<?php 

include('database_crud.php');

$host = '139.59.226.31';
$user = 'cendana';
$pass = 'cendananr2425';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana_ikhsan_crud');
$sql_posisi = "select * from posisi";
$sql_kota= "select * from kota";

$posisi = mysql_query($sql_posisi);
$kota = mysql_query($sql_kota);

$sql = "select pegawai.id_pegawai as id, pegawai.nama as nama_pegawai, posisi.nama as nama_posisi
from pegawai, posisi
where pegawai.id_posisi=posisi.id_posisi";


if($_GET['q']){
	$search = $_GET['q'];
	$sql .=" and (pegawai.nama like '%{$search}%' or posisi.nama like '%{$search}%')";
}

$result = mysql_query($sql);

?>


	<!-- BOOTSTRAP TABLE -->
  <div class="panel panel-default">
  <!-- Default panel contents -->



  <!-- Table -->
  <table class="table">
    <thead>
		<tr>
			<th class="info">Nama</th>
			<th class="danger">Posisi</th>
			<th class="warning">Update</th>
			<th class="success">Hapus</th>
			<th class="success">Detail</th>
		</tr>
	</thead>
	<tbody>
	<?php while ($data = mysql_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $data['nama_pegawai']; ?></td>
			<td><?php echo $data['nama_posisi']; ?></td>
			<td><a href="update.php?id=<?php echo 
			$data ['id']?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="delete.php?id=<?php echo 
			$data ['id']?>"><span class="glyphicon glyphicon-remove"></span></a></td>
			<td><a href="detail.php?id=<?php echo 
			$data ['id']?>">Detail</a></td>		
		</tr>
		<?php } ?>
  </table>
</div>

<div id="hasil"></div>

<div class="tambahData">
	<button type="button" class="btn btn-primary btn-success"> <a href="tambah2.php">Tambah</button></a>
	<button  type="button" class="btn btn-primary btn-danger"><a href="../logout.php">Keluar</button></a>
</div>

<div class="container">
  
</div>