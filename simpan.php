<?php
//Include file koneksi ke database
include "db.php";

//menerima nilai dari kiriman form 
$nama=$_POST["nama"];
$hp=$_POST["hp"];
$merek=$_POST["merek"];
$sewa=$_POST["sewa"];
$harga=$_POST["harga"];
$tgl=$_POST["tgl"];
$alamat=$_POST["alamat"];
$bayar=$_POST["bayar"];
$norek=$_POST["norek"];
if($sewa>1){
	$total = $sewa * $harga;
	echo"". $total;
}else{
	$total = $harga;
	echo "". $total;
}




//Query input menginput data kedalam tabel anggota
  $sql="insert into tb_pembeli (pem_nama,pem_no,produk_name,pem_hari,produk_price,pem_tanggal, pem_alamat, pem_atm, no_rek) values
    ('$nama','$hp','$merek','$harga','$total','$tgl','$alamat','$bayar', '$norek')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($con,$sql);

//Kondisi apakah berhasil atau tidak
if($hasil){
	echo'<script>alert("Sewa Mobil berhasil")</script>';
}else{
	echo 'gagal'.mysqli_error($con);
}
?>