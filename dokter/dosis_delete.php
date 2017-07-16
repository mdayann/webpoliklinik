<?php
include "koneksi.php";
$id_dosis=$_GET['id_dosis'];
$query=mysql_query("delete from dosis where id_dosis='$id_dosis'");
if($query)
{echo "<script>alert('Data Dosis berhasil dihapus')</script>";}
else
{echo "<center>Data gagal dihapus</center><br>";}
echo '<script type="text/javascript">document.location=\'dosis_tampildata.php?kat=2\';</script>';
		
?>