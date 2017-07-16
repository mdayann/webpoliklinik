<?php
include "koneksi.php";
$tgl_pendaftaran=date("Y-m-d");
$no_pasien=$_POST['no_pasien'];
$error='';
$connection = mysql_connect("localhost","root","")or die("Koneksi Gagal");
mysql_select_db("poliklinik")or die("Database Tidak Ditemukan");
			
			
			
			$cekuser = mysql_query("SELECT * FROM pasien WHERE no_pasien=$no_pasien");
			$rows=mysql_num_rows($cekuser);
if($rows==1) {
  echo "<script>alert('Data Pendaftaran Berhasil Disimpan');</script>";
  echo '<script type="text/javascript">document.location=\'pendaftaran_forminput.php?kat=2\';</script>';
} else {
			
				echo"";			
				mysql_close($connection);
				echo "<script>alert('No Pasien Tidak Valid Masukkan Ulang Dengan Benar');</script>";
 echo '<script type="text/javascript">document.location=\'pendaftaran_forminput.php?kat=2\';</script>';
				
				}
				$sql=mysql_query("insert into pendaftaran values (no_pendaftaran,'$_POST[no_pasien]','$tgl_pendaftaran','$_POST[no_urut]','$_POST[kode_jadwal]','$_POST[id_jenisbiaya]','$_POST[nip]')");
				
				
				
		
				if($sql) {
				
			
			}
			
		
			
            
            ?>