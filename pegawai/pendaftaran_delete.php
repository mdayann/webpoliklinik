<html>
<head>
<title>Delete</title>
</head>
<?php
$koneksi=mysql_connect("localhost","root","")or die("Mysql:".mysql_error());
mysql_select_db("poliklinik",$koneksi)or die(mysql_error());
$query=mysql_query("delete from pendaftaran where no_pendaftaran='$_REQUEST[no_pendaftaran]'",$koneksi)or die("Mysql:".mysql_error());
if ($query){
echo "Data dengan no_pendaftaran: $_REQUEST[no_pendaftaran],telah di hapus.";
}
echo "<a href=\"pendaftaran_tampildata.php\">ke halaman pendaftaran_tampildata</a>";
?>
<body>
	
</body>
</html>