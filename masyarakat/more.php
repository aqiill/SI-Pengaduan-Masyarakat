<?php 
	
	if($_GET['apa']=="pengaduan"){ ?>

<?php 
	$query = mysqli_query($koneksi,"SELECT * FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik=masyarakat.nik WHERE id_pengaduan='".$_GET['id_pengaduan']."'");
	$r=mysqli_fetch_assoc($query);
 ?>
<b>Di Laporakan Pada : <?php echo $r['tgl_pengaduan']; ?></b><br>

<?php 
	if($r['foto']=="kosong"){ ?>
		<img src="../img/noImage.png" width="100">
<?php	}else{ ?>
	<img width="100" src="../img/<?php echo $r['foto']; ?>">
<?php }
 ?>


<p><?php echo $r['isi_laporan']; ?></p>
<p>Status : <?php echo $r['status']; ?></p>

<button><a href="index.php?p=dashboard">Back</a></button>

<?php	}elseif ($_GET['apa']=="tanggapan") { ?>

<?php 
	$query = mysqli_query($koneksi,"SELECT * FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik=masyarakat.nik INNER JOIN tanggapan ON pengaduan.id_pengaduan=tanggapan.id_pengaduan INNER JOIN petugas ON tanggapan.id_petugas=petugas.id_petugas WHERE tanggapan.id_pengaduan='".$_GET['id_pengaduan']."'");
	$r=mysqli_fetch_assoc($query);
 ?>
<h2>Petugas <?php echo $r['nama_petugas']; ?></h2>
<b>Ditanggapi pada :<?php echo $r['tgl_tanggapan']; ?></b><br>
<?php 
	if($r['foto']=="kosong"){ ?>
		<img src="../img/noImage.png" width="100">
<?php	}else{ ?>
	<img width="100" src="../img/<?php echo $r['foto']; ?>">
<?php }
 ?>
<p><?php echo $r['isi_laporan']; ?></p>
<p><?php echo $r['tanggapan']; ?></p>
<p>Status : <?php echo $r['status']; ?></p>

<button><a href="index.php?p=dashboard">Back</a></button>

<?php } ?>