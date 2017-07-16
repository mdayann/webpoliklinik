<?php
include "koneksi.php";
if($_POST['tombol']=="SIMPAN"){
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
			
			
			
			$cekuser = mysql_query("SELECT * FROM pendaftaran WHERE no_pendaftaran=$no_pendaftaran");
			$rows=mysql_num_rows($cekuser);
if($rows==1) {
  echo "<script>alert('Data Pemeriksaan Berhasil Disimpan');</script>";
} else {
			
				echo"";			
				mysql_close($connection);
				echo "<script>alert('No Pendaftaran Tidak Valid Masukkan Ulang Dengan Benar');</script>";
 echo '<script type="text/javascript">document.location=\'pemeriksaan_forminput.php?kat=2\';</script>';
				
				}
$query = mysql_query("insert into pemeriksaan(no_pendaftaran,keluhan,diagnosa,perawatan,tindakan,berat_badan,tensi_diastolik,tensi_sistolik,no_resep) values ('$no_pendaftaran','$keluhan','$diagnosa','$perawatan','$tindakan','$berat_badan','$tensi_diastolik','$tensi_sistolik','$no_resep')");
}

?>


<html>

<head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<title>Form Input Resep</title></head>
<body>
<center>
 
  
<table align="center" border="0"  class="borderform" >
<form action="resep_forminput.php" method="post">
  
  <tr>
    <th class="judul1" colspan="3">FORM INPUT RESEP</th>
  </tr>
  <tr height="8">
    <td ></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr >
    <td class="isiformin">No Resep</td>
    <td class="isiformin" ><strong>:</strong></td>
    <td class="isiformin"><input type="text" class="inputtextform1"  readonly="Tidak Bisa Diedit" name="no_resep" size="40" maxlength="50"  value="<?php echo $_POST['no_resep']?>"> 
    </td>
  </tr>
<tr>
    <td class="isiformin">Nama Obat</td>
    <td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><select name="kode_obat" class="dropdown">
      <?php
 include ("koneksi.php");
$sql="select * from obat ";
$query=mysql_query($sql) or die ("Query Salah");
?>
      <?php
while($row=mysql_fetch_array($query)){
?>
      <option value="<?php echo $row['kode_obat']?>"><?php echo $row['nama_obat']?></option>
      <?php
}
?>
    </select></td>
  </tr>
  <tr>
    <td class="isiformin">Dosis</td>
    <td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><select name="id_dosis" class="dropdown">
      <?php
 include ("koneksi.php");
$sql="select * from dosis ";
$query=mysql_query($sql) or die ("Query Salah");
?>
      <?php
while($row=mysql_fetch_array($query)){
?>
      <option value="<?php echo $row['id_dosis']?>"><?php echo $row['nama_dosis']?></option>
      <?php
}
?>
    </select></td>
  </tr>
  <tr>
    <td class="isiformin">Jumlah</td>
    <td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><input type="text" name="jumlah" size="40" maxlength="20" class="inputtextform1" /></td>
  </tr>
  <tr>
    <td class="isiformin"><div align="right">
      <input type="submit" value="SIMPAN" class="tombol" name="tombol1" />
    </div></td>
    <td class="isiformin">&nbsp;</td>
    <td class="isiformin"><input type="reset" value="HAPUS" class="tombol" /></td>
  </tr>
  </form>
  <?php
  
  if($_POST['tombol1']=="SIMPAN")
{
$sqlinputresep=mysql_query("insert into resep values (id_resep,'$_POST[no_resep]','$_POST[kode_obat]','$_POST[id_dosis]',$_POST[jumlah])");
} ?>
    </table> 
<table cellspacing="1" border="0" class="tabel" >
  <tr>
    <th class="judul" colspan="10"><div align="center">DATA RESEP DOKTER</div></th>
  </tr>
  <tr>
    <th class="isiform"><div align="center">Id Resep</div></th>
    <th class="isiform"><div align="center">No Resep</div></th>
    <th class="isiform"><div align="center">Nama Obat</div></th>
    <th class="isiform"><div align="center">Dosis</div></th>
    <th class="isiform"><div align="center">Jumlah</div></th>
    
  
  </tr>
  <?php
include "koneksi.php";
$query = mysql_query("select resep.*,obat.* from resep,obat where resep.kode_obat=obat.kode_obat and resep.no_resep='$_POST[no_resep]'");
				$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				?>
  <tr class="isiform1">
    <td class="isiform1"><div align="center"><em><?php echo $nomor;?></em></div>
    <input type="hidden" name="id_resep" size="40" value="<?php echo "'$data[id_resep]'";?>" class="inputtext" /></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["1"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["nama_obat"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["id_dosis"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["4"]; ?> </em></div></td>
 <?php $nomor++;}?>
  </tr>
</table>

</center>


