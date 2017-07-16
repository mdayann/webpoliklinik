<?php
include "koneksi.php";
 $sql="update jadwal_praktek set kode_dokter='$_POST[kode_dokter]',hari='$_POST[hari]',jam_mulai='$_POST[jam_mulai]',jam_selesai='$_POST[jam_selesai]' where kode_jadwal='$_POST[kode_jadwal]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Jadwal Praktek Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'jadwal_praktek_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data Jadwal Praktek Gagal Edit');</script>";}
 
?>