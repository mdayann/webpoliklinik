<?php
include "koneksi.php";
$kode_obat=$_POST['kode_obat'];
$nama_obat=$_POST['nama_obat'];
$merk=$_POST['merk'];
$satuan=$_POST['satuan'];
$harga_jual=$_POST['harga_jual'];
	  if(!$kode_obat || !$nama_obat || !$merk || !$satuan ||!$harga_jual) {
      echo "<script>alert('Masih Ada Data Yang Kosong');</script>";
      echo '<script type="text/javascript">document.location=\'jenis_obat_form_input.php?kat=2\';</script>';
      } else {
      $query=mysql_query("insert into obat values ('$_POST[kode_obat]','$_POST[nama_obat]','$_POST[merk]','$_POST[satuan]','$_POST[harga_jual]')");
      if($query)
	  {echo"<script>alert('Data Pasien Berhasil Disimpan');</script>";
	  echo '<script type="text/javascript">document.location=\'jenis_obat_tampil_data.php?kat=2\';</script>';}
	  else
	  {echo"<script>alert('Data Pasien Gagal Disimpan');</script>";
	   echo '<script type="text/javascript">document.location=\'jenis_obat_form_input.php?kat=2\';</script>';}
	   }
	?>