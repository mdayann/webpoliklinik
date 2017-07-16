<?php
 include ("koneksi.php");
 $sql="update pasien set nama_pasien='$_POST[nama_pasien]',alamat_pasien='$_POST[alamat_pasien]',tanggal_lahir_pasien='$_POST[tanggal_lahir_pasien]',telp='$_POST[telp]',jenis_kelamin='$_POST[jenis_kelamin]' where no_pasien='$_POST[no_pasien]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Pasien Berhasil Edit');</script>";
	echo '<script type="text/javascript">document.location=\'pasien_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data  Pasien Gagal Edit');</script>";}
 

?>