<?php 

include_once("koneksi.php");

$tanggal = $_POST['tanggal'];
$pekerjaan = $_POST['pekerjaan'];
$waktu1 = $_POST['waktu1'];
$waktu2 = $_POST['waktu2'];


$query = "INSERT INTO agenda_harian 
		  VALUES ('','$tanggal', '$pekerjaan', '$waktu1','$waktu2')";
$hasil = mysqli_query ($conn, $query);

if ($hasil) {
	echo "
		<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'dashboard.php';
		</script>
	";
} else{
	echo "
		<script>
			alert('Data Gagal Ditambahkan');
			document.location.href = 'dashboard.php';
		</script>
 
	";
}
 ?>