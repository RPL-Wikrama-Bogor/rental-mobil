<?php
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
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
			<h3>Tambah Data Mobil</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="nama" placeholder="Merek Mobil" class="input-control" required>
					<input type="text" name="harga" placeholder="Harga" class="input-control" required>
					<input type="file" name="gambar" class="input-control" required>
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
					<select class="input-control" name="status">
						<option value="">--Pilih--</option>
						<option value="1">Tersedia</option>
						<option value="0">Tidak Tersedia</option>
					</select>
					<input type="submit" name="submit" value="submit" class="btn">
				</form>
					<?php
						if(isset($_POST['submit'])){
							//print_r($_FILES['gambar']);
							$nama = $_POST['nama'];
							$harga = $_POST['harga'];
							$deskripsi = $_POST['deskripsi'];
							$status = $_POST['status'];

							$filename = $_FILES['gambar']['name'];
							$tmp_name = $_FILES['gambar']['tmp_name'];

							$type1 = explode('.', $filename);
							$type2 = $type1[1];
							$newname ='mobil'.time().'.'.$type2;

							$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');
							if(!in_array($type2, $tipe_diizinkan)){
								echo '<script>alert("Format File Tidak Di Izinkan")</script>';
							}else{
								move_uploaded_file($tmp_name,'./mobil/'.$newname);

								$insert = mysqli_query($con, "INSERT INTO tb_produk VALUES(
									null,
									'".$nama."',
									'".$harga."',
									'".$deskripsi."',
									'".$newname."',
									'".$status."',
									null
									)");
								if($insert){
									echo 'Simpan Data Berhasil';
								}else{
									echo 'gagal'.mysqli_error($con);
								}
							}
						}
					?>
				</div>
		</div>	
	</div>

</body>
</html>