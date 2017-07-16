<?php
include ("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("insert into admin values('no','$_POST[username]','$_POST[password]')");
if($query)
{echo"Data jenisbiaya berhasil disimpan<br>";}
else
{echo"Data jenisbiaya gagal disimpan<br>";}
echo '<script type="text/javascript">document.location=\'admin_tampil_data.php?kat=2\';</script>';
?>