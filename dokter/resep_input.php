<?php
include "koneksi.php";
$sqlinputresep=mysql_query("insert into resep values (id_resep,'$_POST[no_resep]','$_POST[kode_obat]','$_POST[id_dosis]',$_POST[jumlah])");
if($sqlinputresep){
echo '<script type="text/javascript">document.location=\'resep_forminput.php?kat=2\';</script>';
}
?>