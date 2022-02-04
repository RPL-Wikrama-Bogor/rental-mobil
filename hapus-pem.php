<?php
include 'db.php';

if (isset($_GET['idpem'])) {
	$data = mysqli_query($con, "DELETE FROM tb_pembelian WHERE pem_id = '".$_GET['idpem']."' ");
	echo '<script>window.location="data-pembeli.php"</script>';
	
}
?>