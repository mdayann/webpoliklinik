<?php
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM dokter WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
   echo "Username Salah!";
   echo '<a href="index.php">Back</a>';
} else {
   if($password <> $hasil['password']) {
     echo "Password Salah!";
     echo '<a href="index.php">Back</a>';
   } else {
     $simpan =mysql_query("select*from dokter where username='$username' and password='$password'");
     if($simpan) {
	  $_SESSION['username'] = $hasil['username'];
	     header('location:indexlogin.php');
	  
	   
}
}
}
?>