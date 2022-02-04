<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db_rentalmobil';

	$con = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung Ke Databaase');

?>