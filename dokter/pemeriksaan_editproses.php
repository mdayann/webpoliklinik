<?php
include "koneksi.php";
 $sql="update pemeriksaan set no_pendaftaran='$_POST[no_pendaftaran]',keluhan='$_POST[keluhan]',diagnosa='$_POST[diagnosa]',perawatan='$_POST[perawatan]',tindakan='$_POST[tindakan]',berat_badan='$_POST[berat_badan]',tensi_diastolik='$_POST[tensi_diastolik]',tensi_sistolik='$_POST[tensi_sistolik]',no_resep='$_POST[no_resep]' where no_pemeriksaan='$_POST[no_pemeriksaan]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Pemeriksaan Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'pemeriksaan_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data Buku Gagal Edit');</script>";}
 
?>