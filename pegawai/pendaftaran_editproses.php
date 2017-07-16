<?php
include "koneksi.php";
 $sql="update pendaftaran set no_pasien='$_POST[no_pasien]',kode_jadwal='$_POST[kode_jadwal]',id_jenisbiaya='$_POST[id_jenisbiaya]' where no_pendaftaran='$_POST[no_pendaftaran]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Pendaftara Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'pendaftaran_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data Pendaftara Gagal Edit');</script>";}
 
?>