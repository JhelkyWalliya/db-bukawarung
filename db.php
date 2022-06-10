<?php 
//Gagal terhubung ke database
	$hostname = 'localhost';
	$username = 'root';
	$password = 'admin';
	$dbname   = 'db_bukawarung';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('db_bukawarung');
?>

