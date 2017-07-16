<?php
include ("koneksi.php");
$kode_jadwal=$_POST['kode_jadwal'];
$hari=$_POST['hari'];
$jam_mulai=$_POST['jam_mulai'];
$jam_selesai=$_POST['jam_selesai'];
$kode_dokter=$_POST['kode_dokter'];
$query=mysql_query("insert into jadwal_praktek values('$_POST[kode_jadwal]','$_POST[hari]','$_POST[jam_mulai]','$_POST[jam_selesai]','$_POST[kode_dokter]')");
if($query)
{echo"Data berhasil disimpan<br>";}
else
{echo"Data gagal disimpan<br>";}
echo '<script type="text/javascript">document.location=\'jadwal_praktek_tampildata.php?kat=2\';</script>';
?>