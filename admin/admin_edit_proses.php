<?php
include "koneksi.php";
 $sql="update admin set username='$_POST[username]',password='$_POST[password]' where no='$_POST[no]'";
 $query=mysql_query($sql);
 if($query)
 { echo "<script>alert('Data Admin Berhasil Edit');</script>";
 echo '<script type="text/javascript">document.location=\'admin_tampil_data.php?kat=2\';</script>';
 }
 else
 { echo "<script>alert('Data jenisbiaya Gagal Edit');</script>";}
 
?>