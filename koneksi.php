<?php
	$host = 'prognet.localnet';
	$user = '2205551150';
	$pass = '2205551150';
	$db = 'db_2205551150';

	$conn = new mysqli($host, $user, $pass, $db);
	
	if($conn){
		//echo "Koneksi Berhasil";
	}

	mysqli_select_db($conn, $db);
?>
