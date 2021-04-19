<?php 
	session_start();
	include '../conn/koneksi.php';
	$status = $_GET['s'];
	$id = $_GET['id_pengaduan'];

	if ($status=="proses") {
		$update = mysqli_query($koneksi,"UPDATE pengaduan SET status='belum diproses' WHERE id_pengaduan='$id'");
	}
	elseif ($status=="belum") {
		$update = mysqli_query($koneksi,"UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$id'");
	}

	if ($update) {	
		// echo "<script>alert('Laporan Diperbaharui')</script>";
		echo "<script>location='index.php?p=pengaduan';</script>";
	}

 ?>