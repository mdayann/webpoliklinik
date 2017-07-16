<?php
include "koneksi.php";
$nama_pasien=$_POST['nama_pasien'];
$alamat_pasien=$_POST['alamat_pasien'];
$tanggal_lahir_pasien=$_POST['tanggal_lahir_pasien'];
$telp=$_POST['telp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_registrasi= date("Y-m-d");
$tanggalsekarang=date("Y-m-d");
	  if(!$nama_pasien || !$alamat_pasien || !$tanggal_lahir_pasien || !$telp ||!$jenis_kelamin || !$jenis_kelamin) {
echo "<script>alert('Masih Ada Data Yang Kosong');</script>";
  echo '<script type="text/javascript">document.location=\'pasien_forminput.php?kat=2\';</script>';
} 
elseif($tanggal_lahir_pasien>$tanggalsekarang)
{
echo "<script>alert('Tanggal Lahir yang anda masukkan tidak valid');</script>";
  echo '<script type="text/javascript">document.location=\'pasien_forminput.php?kat=2\';</script>';
}
else {
$query=mysql_query("insert into pasien values(no_pasien,'$_POST[nama_pasien]','$_POST[alamat_pasien]','$_POST[tanggal_lahir_pasien]','$_POST[telp]','$_POST[jenis_kelamin]','$tanggal_registrasi')");
if($query)
{echo"<script>alert('Data Pasien Berhasil Disimpan');</script>";
echo '<script type="text/javascript">document.location=\'pasien_tampildata.php?kat=2\';</script>';}
else
{echo"<script>alert('Data Pasien Gagal Disimpan');</script>";
echo '<script type="text/javascript">document.location=\'pasien_forminput.php?kat=2\';</script>';}
}
?>