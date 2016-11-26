<?php
require_once('config.php');

$sql = 'select * from pegawai';
$result = mysql_query($sql);
while($data = mysql_fetch_array($result)){
	echo "<li>". $data['nama']. "</li>";
}
echo "</ul>";
?>