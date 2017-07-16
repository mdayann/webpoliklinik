<?php
include ("koneksi.php");
$id_dosis=$_POST['id_dosis'];
$nama_dosis=$_POST['nama_dosis'];
$query=mysql_query("insert into dosis values('$_POST[id_dosis]','$_POST[nama_dosis]')");
if($query)
{echo"Data berhasil disimpan<br>";}
else
{echo"Data gagal disimpan<br>";}
echo '<script type="text/javascript">document.location=\'dosis_tampildata.php?kat=2\';</script>';
?>