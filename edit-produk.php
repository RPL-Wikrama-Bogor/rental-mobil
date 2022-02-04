<?php
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
	$produk = mysqli_query($con, "SELECT * FROM tb_produk WHERE produk_id = '".$_GET['id']."'");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rentalmobil</title>
	<link rel="stylesheet" type="text/css" href="logincss/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!--header-->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">Fast Car</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-produk.php">Data Mobil</a></li>
				<li><a href="data-pembeli.php">Data Pembeli</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>
	<!--content-->
	<div class="section">
		<div class="container">
			<h3>Edit Data Mobil</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="nama" placeholder="Merek Mobil" value="<?php echo $p->produk_name?>"class="input-control" required>
					<input type="text" name="harga" placeholder="Harga" value="<?php echo $p->produk_price?>" class="input-control" required>
					
					<img src="mobil/<?php echo $p->produk_gambar ?>"width="150px
					">
					<input type="hidden" name="foto" value="<?php echo $p->produk_gambar?>">
					<input type="file" name="gambar" class="input-control" required>
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo $p->produk_deskripsi?></textarea>
					<select class="input-control" name="status">
						<option value="">--Pilih--</option>
						<option value="1"<?php echo ($p->produk_status == 1)? 'selected':'';?>>Tersedia</option>
						<option value="0"<?php echo ($p->produk_status == 0)? 'selected':'';?>>Tidak Tersedia</option>
					</select>
					<input type="submit" name="submit" value="submit" class="btn">
				</form>
					<?php
						if(isset($_POST['submit'])){
							$nama = $_POST['nama'];
							$harga = $_POST['harga'];
							$deskripsi = $_POST['deskripsi'];
							$status = $_POST['status'];
							$foto = $_POST['foto'];

							$filename = $_FILES['gambar']['name'];
							$tmp_name = $_FILES['gambar']['tmp_name'];

							$type1 = explode('.', $filename);
							$type2 = $type1[1];
							$newname ='mobil'.time().'.'.$type2;


							$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');
							if($filename != ''){

								if(!in_array($type2, $tipe_diizinkan)){
									echo '<script>alert("Format File Tidak Di Izinkan")</script>';
								}else{
									unlink('./produk/'.$foto);
									move_uploaded_file($tmp_name,'./mobil/'.$newname);
									$namagambar = $newname;
								}
							}else{
								$namagambar = $foto;
							}
							$update = mysqli_query($con, "UPDATE tb_produk SET 
												produk_name ='".$nama."',
												produk_price ='".$harga."',
												produk_deskripsi ='".$deskripsi."',	
												produk_gambar ='".$namagambar."',	
												produk_price ='".$harga."',
												produk_status ='".$status."'
												WHERE produk_id = '".$p->produk_id."' ");
							if($update){
								echo'<script>alert("ubah data berhasil")</script>';
								echo'<script>window.location="data-produk.php"</script>';

							}else{
								echo 'gagal'.mysqli_error($con);


							}
						}	
					?>
				</div>
		</div>	
	</div>

</body>
</html>