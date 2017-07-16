<?php
include "koneksi.php";
 $sql="update obat set nama_obat='$_POST[nama_obat]',merk='$_POST[merk]',satuan='$_POST[satuan]',harga_jual='$_POST[harga_jual]' where kode_obat='$_POST[kode_obat]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Obat Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'jenis_obat_tampil_data.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data Buku Gagal Edit');</script>";}
 
?>