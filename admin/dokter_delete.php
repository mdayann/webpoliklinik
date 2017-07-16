<?php
include "koneksi.php";
$kode_dokter=$_GET['kode_dokter'];
$query=mysql_query("delete from dokter where kode_dokter='$kode_dokter'");
if($query)
{echo "<script>alert('Data Dokter berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'dokter_tampildata.php?kat=2\';</script>';
		
?>