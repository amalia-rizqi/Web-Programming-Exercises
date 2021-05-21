<?php
// daftar users
$users = array(
			array("username1", "Bambang", "123456"),
			array("username2", "Siti", "789123"),
			array("username3", "Munaroh", "987654")
		 );

	$username = $_POST['username'];
	$password = $_POST['password'];

	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			// jika ada yg match maka bikin session untuk simpan nama user
			setcookie("namauser", $profile_user[1], time()+3*30*24*3600,"/");

			// redirect halaman ke page1.php
			header("Location: page1.php");
		}
	}

	// jika tidak ada username dan password yg match
	echo "<h3>Login gagal</h3>";
	echo "<p>Silakan <a href='form.html'>login kembali</a></p>";

?>