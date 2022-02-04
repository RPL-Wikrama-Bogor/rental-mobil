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
			<h3>Data Pembeli</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Nama Penyewa</th>
							<th>No Hp</th>
							<th>Merek Mobil</th>
							<th>Lamanya Pesan</th>
							<th>Pembayaran</th>
							<th>Tanggal Pesan</th>
							<th>Alamat</th>
							<th>Bank</th>
							<th>No Rek</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$no = 1;
						$data = mysqli_query($con, "SELECT * FROM tb_pembeli ORDER BY pem_id DESC");
						while($row = mysqli_fetch_array($data)){

					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['pem_nama']?></td>
						<td><?php echo $row['pem_no']?></td>
						<td><?php echo $row['produk_name']?></td>
						<td><?php echo $row['pem_hari']?></td>
						<td><?php echo $row['produk_price']?></td>
						<td><?php echo $row['pem_tanggal']?></td>
						<td><?php echo $row['pem_alamat']?></td>
						<td><?php echo $row['pem_atm']?></td>
						<td><?php echo $row['no_rek']?></td>
						<td>
							<a href="hapus-pem.php?idpem=<?php echo $row['pem_id']?> "onclick="return confirm('Yakin Hapus?')">Hapus</a>
						</td>
					</tr>
				<?php } ?>
					</tbody>
			</div>
	</div>

</body>
</html>