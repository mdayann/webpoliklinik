<?php
include "koneksi.php";
 $sql="update dokter set nama_dokter='$_POST[nama_dokter]',alamat_dokter='$_POST[alamat_dokter]',telepon_dokter='$_POST[telepon_dokter]',username='$_POST[username]',password='$_POST[password]' where kode_dokter='$_POST[kode_dokter]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Dokter Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'dokter_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data Dokter Gagal Edit');</script>";
  echo '<script type="text/javascript">document.location=\'dokter_tampildata.php?kat=2\';</script>';}
 
?>