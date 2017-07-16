<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.php'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");
$query = mysql_query("SELECT * FROM pegawai WHERE username = '$username'");
$hasil = mysql_fetch_array($query);

//include "config/fungsi_kalender.php";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Pendaftaran</title>


</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<div align="center">
<?php
include "koneksi.php";
$tanggal=date("Y-m-d");
$sqlurut="select * from pendaftaran where tgl_pendaftaran='$tanggal'";
$queryurut=mysql_query($sqlurut);
$jumlahurut=mysql_num_rows($queryurut);
$nourut=$jumlahurut+1;

?>
<form action="pendaftaran_input.php" method="post">
 	<table width="514" border="0" align="center" class="borderform">
<tr>
         <td colspan="3" class="judul1"><div align="center">Form Input Pendaftaran</div></td>
       </tr>
       <tr>
         <td class="isiformin">No Pasien</span></td>
         <td class="isiformin"><strong>:</strong></td>
<td class="isiformin">
           <input type="text" class="inputtextform1" name="no_pasien" size="40" maxlength="30" />
         </span></td>
       </tr>
       <tr>
         <td width="255" class="isiformin">Dokter Yang Bertugas</td>
         <td width="5" class="isiformin"><strong>:</strong></td>
         <td width="240" class="isiformin">
         <select name="kode_jadwal" style="width:61.5%" class="dropdown">
           <option value="#">Pilih Dokter </option>
           <?php
 include ("koneksi.php");
 $hari=date("l");
$sqldokter="select jadwal_praktek.*,dokter.* from jadwal_praktek,dokter where jadwal_praktek.kode_dokter=dokter.kode_dokter and jadwal_praktek.hari='$hari'";
$querydokter=mysql_query($sqldokter) or die ("Query Salah");
?>
           <?php
while($rowdokter=mysql_fetch_array($querydokter)){
?>
         
           <option value="<?php echo $rowdokter['kode_jadwal']?>"><?php echo $rowdokter['nama_dokter']?></option>
           <?php
}
?>
         </select>
         </span></td>
      </tr>
       <tr>
         <td class="isiformin">Jenis Pemeriksaan</td>
         <td class="isiformin"><strong>:</strong></td>
       <td class="isiformin">
           <select name="id_jenisbiaya" style="width:61.5%" class="dropdown">
           <option value="#">Pilih Jenis Pemeriksaan</option>
             <?php
 include ("koneksi.php");
$sql="select * from jenisbiaya ";
$query=mysql_query($sql) or die ("Query Salah");
?>
             <?php
while($row=mysql_fetch_array($query)){
?>
			  
             <option value="<?php echo $row['id_jenisbiaya']?>"><?php echo $row['nama_biaya']?></option>
             <?php
}
?>
           </select>
         </span></td>
       </tr>
       <tr>
         <td class="isiformin">No Urut</span></td>
         <td class="isiformin"><strong>:</strong></td>
       <td class="isiformin">
           <input type="text" class="inputtextform1" name="no_urut" size="40" readonly="Tidak Bisa Diedit" maxlength="25" value=<?php echo "$nourut"; ?> />
         </span>
         <?php
 include ("koneksi.php");
$sql="select * from pegawai where  username='$username'";
$query=mysql_query($sql) or die ("Query Salah");
?>
         <?php
while($row=mysql_fetch_array($query)){
?>
         <em>
         <input type="hidden" name="nip"  class="inputtextform1" value="<?php echo $row['nip']?>"  size="40" maxlength="80"  />
         </em>
         <?php
}
?></td>
       </tr>
       <tr>
         <td colspan="3" class="isiformin" style="text-align: center"><input type="submit" value="SIMPAN" class="tombol" /></td>
       </tr>
     </table>
</form>
<p>&nbsp;</p>

</body>
</html>
</div>