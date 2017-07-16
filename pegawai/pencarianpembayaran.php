<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "koneksi.php";
$sql="select * from pemeriksaan where no_pemeriksaan like '%$_POST[no_pemeriksaan]%'";
?>
<div align="center"><form action="buktipembayaran.php" method="post">
  <input type="text" name="no_pemeriksaan" size="40"  class="cari" size="25" placeholder="Masukkan No Pemeriksaan" />
  &nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>
</body>
</html>
