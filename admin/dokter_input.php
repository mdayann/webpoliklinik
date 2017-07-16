<?php
session_start();
include ("koneksi.php");
$kode_dokter=$_POST['kode_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$alamat_dokter=$_POST['alamat_dokter'];
$telepon_dokter=$_POST['telepon_dokter'];
$username=$_POST['username'];
$password=$_POST['password'];
$cekuser = mysql_query("SELECT * FROM dokter WHERE username = '$username'");
if(mysql_num_rows($cekuser) > 0) {
echo "<script>alert('Username Sudah Terdaftar');</script>";
 echo '<script type="text/javascript">document.location=\'dokter_forminput.php?kat=2\';</script>';
} else {

	  if(!$kode_dokter || !$nama_dokter || !$alamat_dokter || !$telepon_dokter ||!$username || !$password) {
echo "<script>alert('Masih Ada Data Yang Kosong');</script>";
  echo '<script type="text/javascript">document.location=\'dokter_forminput.php?kat=2\';</script>';
} else {
$query=mysql_query("insert into dokter values('$kode_dokter','$nama_dokter','$alamat_dokter','$telepon_dokter','$username','$password')");
if($query)
{echo"<script>alert('Data Dokter Berhasil Disimpan');</script>";
echo '<script type="text/javascript">document.location=\'dokter_tampildata.php?kat=2\';</script>';}
else
{echo"<script>alert('Data Dokter Gagal Disimpan');</script>";
echo '<script type="text/javascript">document.location=\'dokter_forminput.php?kat=2\';</script>';}
}
}
?>