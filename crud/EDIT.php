<?php session_start();
if(isset($_SESSION['userdata'])) :

$host = '139.59.226.31';
$user = 'cendana';
$pass = 'cendananr2425';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana_ikhsan_crud');


?>



<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<link rel="stylesheet" href="../css/bootstrap.css">

<!DOCTYPE html>
<html>
<body>
<div class="panel-default">
  <div class="panel-heading"><center><h4>Daftar Pegawai Cendana</h4>
  <!-- Search Bootsrap -->

  </div>
  <div class="panel-body">
  <div class="row">
<form action="EDIT.php" class="navbar-form" role="search"  >
 <div  class=" col-lg-offset-3 col-lg-6">
					<div class="input-group col-md-12">
						<input id="txtcari" type="text" class="form-control" placeholder="Search" name="q" value='<?php echo @$_GET['q']; ?>'>
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit" value="search">Cari!</button>
						</span>
					</div>
					</div>

				</form>	
				</div>
</div>

				<!-- BOOTSTRAP TABLE -->




<div id="hasil"></div>
</div>
<div class="container">
  
</div>


<?php else : ?>
	HARAP LOGIN DAHULU.<a href="../index.php">Kembali</a>
<?php endif;  ?>
	
<!-- Bootstrap + jquery -->
<script src ="../js/bootstrap.min.js"></script>
<script src="../js/jquery-1.11.3.js"></script>

<script type="text/javascript" src="../js/script.js"></script>

<script type="text/javascript">
	
	$(function(){
		$(":input:first").focus();
	});
</script>
</tbody>
</table>
</body>
</html>