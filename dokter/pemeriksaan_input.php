<?php
include "koneksi.php";
$no_pendaftaran=$_POST['no_pendaftaran'];
$keluhan=$_POST['keluhan'];
$diagnosa=$_POST['diagnosa'];
$perawatan=$_POST['perawatan'];
$tindakan=$_POST['tindakan'];
$berat_badan=$_POST['berat_badan'];
$tensi_diastolik=$_POST['tensi_diastolik'];
$tensi_sistolik=$_POST['tensi_sistolik'];
$no_resep=$_POST['no_resep'];
$error='';
$connection = mysql_connect("localhost","root","")or die("Koneksi Gagal");
mysql_select_db("poliklinik")or die("Database Tidak Ditemukan");
			
			
			
			$cekuser = mysql_query("SELECT * FROM pemeriksaan WHERE no_pendaftaran=$no_pendaftaran");
			$rows=mysql_num_rows($cekuser);
if($rows==1) {
  echo "<script>alert('Data Pemeriksaan Berhasil Disimpan');</script>";
  echo '<script type="text/javascript">document.location=\'pemeriksaan_forminput.php?kat=2\';</script>';
} else {
			
				echo"";			
				mysql_close($connection);
				echo "<script>alert('No Pendaftaran Tidak Valid Masukkan Ulang Dengan Benar');</script>";
 echo '<script type="text/javascript">document.location=\'pemeriksaan_forminput.php?kat=2\';</script>';
				
				}
$query = mysql_query("insert into pemeriksaan(no_pendaftaran,keluhan,diagnosa,perawatan,tindakan,berat_badan,tensi_diastolik,tensi_sistolik,no_resep) values ('$no_pendaftaran','$keluhan','$diagnosa','$perawatan','$tindakan','$berat_badan','$tensi_diastolik','$tensi_sistolik','$no_resep')");
if($query)
{echo "<script>alert('Data Pemeriksaan Berhasil Di Ditambah')</script>";}
else
{echo "<script>alert('Data Pemeriksaan gagal Di Ditambah')</script>";

}
echo '<script type="text/javascript">document.location=\'resep_forminput.php?kat=2\';</script>';
?>