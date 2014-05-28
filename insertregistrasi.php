<?php
//panggil file config.php untuk menghubung ke server

$koneksi=mysqli_conect("localhost","root","","projek1");

//tangkap data dari form
$email = $_POST['email'];
$password = $_POST['password'];
$verif_password = $_POST['verif_password'];
$nama_pengguna = $_POST['nama_pengguna'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$pekerjaan = $_POST['pekerjaan'];

//simpan data ke database
$query ="INSERT INTO user values('', '$email', '$password', '$verif_password', '$nama_pengguna', '$tanggal_lahir', '$gender', 
'$alamat', '$sekolah', '$pekerjaan')") or die(mysql_error());
$row=mysqli_query($query);

if ($query) {
	header('location:index.php?message=success');
}
?>
