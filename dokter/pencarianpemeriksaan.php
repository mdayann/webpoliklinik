<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<?php
include "koneksi.php";
$sql="select * from pemeriksaan where no_pendaftaran like '%$_POST[no_pendaftaran]%'";
?>
<div align="center"><form action="buktipemeriksaan.php" method="post">
  <input type="text" name="no_pendaftaran"  class="cari" size="25" placeholder="Masukkan No Pendaftaran" />
  &nbsp;&nbsp;
  
  &nbsp;&nbsp;
</div></form>
</body>
</html>
