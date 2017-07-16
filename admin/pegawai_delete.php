<?php
$koneksi = mysql_connect("localhost","root","") or die("MySQL  :". mysql_error());
	mysql_select_db("poliklinik", $koneksi)or die(mysql_error());
$query=mysql_query("delete from pegawai where nip='$_REQUEST[nip]'",$koneksi)or die("Mysql:".mysql_error());
	if($query)
{echo "<script>alert('Data Pegawai Berhasil Di Delete')</script>";
echo '<script type="text/javascript">document.location=\'pegawai_tampildata.php?kat=2\';</script>';
}
else
{echo "<script>alert('Data Pegawai gagal Di Delete')</script>";

}
echo '<script type="text/javascript">document.location=\pegawai_tampildata.php?kat=2\';</script>';
?>