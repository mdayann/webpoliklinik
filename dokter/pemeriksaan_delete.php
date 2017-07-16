<?php
include "koneksi.php";
$no_pemeriksaan=$_GET['no_pemeriksaan'];
$query=mysql_query("delete from pemeriksaan where no_pemeriksaan='$no_pemeriksaan'");
if($query){
echo "<script>alert('Berhasil di hapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=data_prog.php'>";if($query)
{echo "<script>alert('Data Pemeriksaan berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'pemeriksaan_tampildata.php?kat=2\';</script>';
		}
?>