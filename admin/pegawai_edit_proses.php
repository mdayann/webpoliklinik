<?php
include "koneksi.php";

 $sql="update pegawai set nama_pegawai='$_POST[nama_pegawai]',alamat_pegawai='$_POST[alamat_pegawai]',telepon_pegawai='$_POST[telepon_pegawai]',jeniskelamin_pegawai='$_POST[jeniskelamin_pegawai]'
 where nip='$_POST[nip]'";
 
 
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Pegawai Berhasil Edit');</script>";
	echo '<script type="text/javascript">document.location=\'pegawai_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Kok Gagal');</script>";}
 

?>