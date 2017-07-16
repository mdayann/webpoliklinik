<?php
 include "koneksi.php";
 $sql="update dosis set nama_dosis='$_POST[nama_dosis]' where id_dosis='$_POST[id_dosis]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Dosis Berhasil Edit');</script>";
	echo '<script type="text/javascript">document.location=\'dosis_tampildata.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data Dosis Gagal Edit');</script>";
 	echo '<script type="text/javascript">document.location=\'dosis_forminput.php?kat=2\';</script>';

 }
 

?>