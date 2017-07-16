<?php
include "koneksi.php";
$id_jenisbiaya=$_GET['id_jenisbiaya'];
$query=mysql_query("delete from jenisbiaya where id_jenisbiaya='$id_jenisbiaya'");
if($query)
{echo "<script>alert('Data Biaya berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'jenis_biaya_tampil_data.php?kat=2\';</script>';
		
?>