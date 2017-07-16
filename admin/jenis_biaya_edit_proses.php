<?php
include "koneksi.php";
 $sql="update jenisbiaya set nama_biaya='$_POST[nama_biaya]',tarif='$_POST[tarif]' where id_jenisbiaya='$_POST[id_jenisbiaya]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data jenisbiaya Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'jenis_biaya_tampil_data.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data jenisbiaya Gagal Edit');</script>";}
 
?>