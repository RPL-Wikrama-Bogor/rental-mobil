<?php
include 'db.php';
if (isset($_GET['idp'])) {
	$produk = mysqli_query($con, "DELETE FROM tb_produk WHERE produk_id = '".$_GET['idp']."' ");
	echo '<script>window.location="data-produk.php"</script>';
	
}

?>