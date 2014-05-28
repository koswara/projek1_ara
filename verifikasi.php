<?php
SESSION_START();
$koneksi	= mysqli_connect("localhost","root","","");

//menangkap data dari form

$username 	= $_POST['email'];
$password	= $_POST['password'];
$jumlah		= strlen($password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:formlogin.php?error=1');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:formlogin.php?error=2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:formlogin.php?error=3');
	break;
} else if ($jumlah <6) {
	
	//password kurang dari 6 digit
	header('location:formlogin.php?error=5');
	break;
}

$query = mysql_query("SELECT * FROM user WHERE email='$username' and password='$password'");

if (mysql_num_rows($query) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['email'] = $username;
	
	//redirect ke halaman index
	header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:formlogin.php?error=4');
}
?>
?>
