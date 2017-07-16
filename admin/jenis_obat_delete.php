<?php
include "koneksi.php";
$kode_obat=$_GET['kode_obat'];
$query=mysql_query("delete from obat where kode_obat='$kode_obat'");
if($query)
{echo "<script>alert('Data Pasien berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'jenis_obat_tampil_data.php?kat=2\';</script>';
		
?>