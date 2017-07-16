<?php
include "koneksi.php";
$no_pasien=$_GET['no_pasien'];
$query=mysql_query("delete from pasien where no_pasien='$no_pasien'");
if($query)
{echo "<script>alert('Data Pasien berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'pasien_tampildata.php?kat=2\';</script>';
		
?>