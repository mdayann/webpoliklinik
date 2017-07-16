<?php
include ("koneksi.php");
$nama_biaya=$_POST['nama_biaya'];
$tarif=$_POST['tarif'];
 if(!$nama_biaya ) {
echo "<script>alert('Masih Ada Data Yang Kosong');</script>";
  echo '<script type="text/javascript">document.location=\'jenis_biaya_form_input.php?kat=2\';</script>';
} else {
$query=mysql_query("insert into jenisbiaya values(id_jenisbiaya,'$_POST[nama_biaya]','$_POST[tarif]')");
if($query)
{echo"<script>alert('Data Pasien Berhasil Disimpan');</script>";
echo '<script type="text/javascript">document.location=\'jenis_biaya_tampil_data.php?kat=2\';</script>';}
else
{echo"<script>alert('Data Pasien Gagal Disimpan');</script>";
echo '<script type="text/javascript">document.location=\'jenis_biaya_form_input.php?kat=2\';</script>';}
}
?>