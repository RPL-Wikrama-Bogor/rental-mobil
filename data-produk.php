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
			<h3>Data Produk</h3>
			<div class="box">
				<p><a href="tambah-produk.php">Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$no = 1;
						$produk = mysqli_query($con, "SELECT * FROM tb_produk ORDER BY produk_id DESC");
						while($row = mysqli_fetch_array($produk)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['produk_name']?></td>
						<td>Rp.<?php echo number_format( $row['produk_price'])?></td>
						<td><?php echo $row['produk_deskripsi']?></td>
						<center></center>
						<td><img src="mobil/<?php echo $row['produk_gambar']?>" width="150px"></td>
						<td><?php echo $row['produk_status']?></td>
						<td>
							<a href="edit-produk.php?id=<?php echo $row['produk_id']?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['produk_id']?> "onclick="return confirm('Yakin Hapus?')">Hapus</a>
						</td>
					</tr>
				<?php } ?>
					</tbody>
			</div>
	</div>

</body>
</html>