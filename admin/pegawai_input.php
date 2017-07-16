<?php
session_start();
include ("koneksi.php");
$nip=$_POST['nip'];
$nama_pegawai=$_POST['nama_pegawai'];
$username=$_POST['username'];
$password=$_POST['password'];
$alamat_pegawai=$_POST['alamat_pegawai'];
$telepon_pegawai=$_POST['telepon_pegawai'];
$jeniskelamin_pegawai=$_POST['jeniskelamin_pegawai'];
$cekuser = mysql_query("SELECT * FROM pegawai WHERE username = '$username'");
if(mysql_num_rows($cekuser) > 0) {
echo "<script>alert('Username Sudah Terdaftar');</script>";
 echo '<script type="text/javascript">document.location=\'indexlogin.php?p=pegawai_form.php\';</script>';
} else {

	  if(!$nip || !$nama_pegawai || !$username || !$password ||!$alamat_pegawai || !$telepon_pegawai || !$jeniskelamin_pegawai) {
echo "<script>alert('Masih Ada Data Yang Kosong');</script>";
  echo '<script type="text/javascript">document.location=\'pegawai_form.php?kat=2\';</script>';
} else {
$query=mysql_query("insert into pegawai values('$nip','$nama_pegawai','$alamat_pegawai','$telepon_pegawai','$jeniskelamin_pegawai','$username','$password')");
if($query)
{echo"<script>alert('Data Berhasil Di Simpan');</script>";
echo '<script type="text/javascript">document.location=\'pegawai_tampildata.php?kat=2\';</script>';
}
else
{echo"<script>alert('Data Gagal Terdaftar');</script>";
echo '<script type="text/javascript">document.location=\'pegawai_form.php?kat=2\';</script>';}
}
}
?>