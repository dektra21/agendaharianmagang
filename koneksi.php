<?php 

$conn = mysqli_connect("localhost", "root", "", "data_users");

if(!$conn){
	echo "Koneksi Gagal";
	die();
}else{
	echo "";
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM  agenda_harian WHERE id = '$id'");
    return mysqli_affected_rows($conn);

}

 ?>