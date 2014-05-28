<?php
	session_start();
	$koneksi =mysqli_connect("localhost","root","","");
?>
<!DOCTYPE html>
<html>
<head>
<title>formlogin</title>
</head>

<body>
	<center>
		<form method="POST" action="verifikasi.php">
			<input type="text" name="email" placeholder="email"/>
			<br/>
		<input type="password" name="password" placeholder="password"/>
			<br/>
		<br/>
		<input type="submit" name="submit" value="login" />
<?php
	if (!empty($_GET['error'])){
		if($_GET['error'] == 1){
		echo "email dan password belum di isi";
		}
		else if ($_GET['error'] == 2){
		echo "email belum di isi";
		}
		else if ($_GET['error'] == 3){
		echo "password belum di isi";
		}
		else if ($_GET['error'] == 4){
		echo "email dan password tidak terdaftar";
		}
		else if ($_GET['error'] == 5){
		echo "password kurang dari 6 karakter";
		}
	}
?>
		</form>
	</center>
</body>
</html>
