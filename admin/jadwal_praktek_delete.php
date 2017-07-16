<?php
include "koneksi.php";
$kode_jadwal=$_GET['kode_jadwal'];
$query=mysql_query("delete from jadwal_praktek where kode_jadwal='$kode_jadwal'");
if($query){
echo "<script>alert('Berhasil di hapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=data_prog.php'>";if($query)
{echo "<script>alert('Data jenis biaya berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'jadwal_praktek_tampildata.php?kat=2\';</script>';
		}
?>