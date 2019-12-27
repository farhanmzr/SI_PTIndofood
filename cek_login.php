<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// mencegah SQL injection untuk mengecek apakah teks yang dimasukkan user mengandung teks yang dilarang atau tidak.
$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, trim(md5($_POST['password'])));


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);



// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "admin";
		$_SESSION['status'] = "login_admin";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");

		// cek jika user login sebagai pembeli
	} else if ($data['level'] == "pembeli") {
		// buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['level'] = "pembeli";
		$_SESSION['status'] = "login_pembeli";
		// alihkan ke halaman dashboard pembeli
		header("location:pembeli.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}
