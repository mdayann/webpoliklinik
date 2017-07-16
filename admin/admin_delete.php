<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("delete from admin where no='$no'");
if($query)
{echo "<script>alert('Data Admin berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'admin_tampil_data.php?kat=2\';</script>';
		
?>