<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="tabel.css">
<style type="text/css">
.style1 {color: #CC0000}
.style2 {font-size: 16px}
</style>
</head>

<body>
<div align="left" class="tabel4">
 <?php
	 include "koneksi.php";
	 include "tanggal.php";
	 $sql="select   pasien.*,pendaftaran.*,pemeriksaan.* from pasien,pendaftaran,pemeriksaan where   pasien.no_pasien=pendaftaran.no_pasien and pendaftaran.no_pendaftaran=pemeriksaan.no_pendaftaran and pendaftaran.no_pendaftaran='$_REQUEST[no_pendaftaran]'  ";
	 	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 $tanggal=tgl_indo($data['tanggal_lahir_pasien']);
	 ?>
<table width="100%" height="340" border="0" style="color:#000000;">
  <tbody>
    <tr>
      <td colspan="4" style="text-align: center"><img src="pemeriksaan.png" width="95%" height="94">
        <hr width="100%" size="3" color="#000000" />       </td>
    </tr>
    
   
     
    <tr>
      <td width="1%" style="text-align: left">&nbsp;</td>
      <td width="43%" height="24" style="text-align: left"><span class="style2">No Pemeriksaan</span></td>
      <td width="2%">:</td>
      <td width="54%"><span class="style2"><?php echo $data['no_pemeriksaan']?></span></td>
    </tr>
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Nama Pasien</td>
      <td>:</td>
      <td><span class="style2"><?php echo $data['nama_pasien']?></span></td>
    </tr>
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Tanggal Lahir</td>
      <td>:</td>
      <td><span class="style2"><?php echo $tanggal?></span></td>
    </tr>
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Jenis Kelamin</td>
      <td>:</td>
      <td><span class="style2"><?php echo $data['jenis_kelamin']?></span></td>
    </tr>
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Keluhan</td>
      <td>:</td>
      <td><span class="style2"><?php echo $data['keluhan']?></span></td>
    </tr>
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Diagnosa</td>
      <td>:</td>
      <td><span class="style2"><?php echo $data['diagnosa']?></span></td>
    </tr>
    	
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Perawatan</td>
      <td>:</td>
      <td><span class="style2"><?php echo $data['perawatan']?></span></td>
    </tr>
    <tr>
      <td class="style2" style="text-align: left">&nbsp;</td>
      <td height="24" class="style2" style="text-align: left">Tindakan</td>
      <td>:</td>
      <td><span class="style2"><?php echo $data['tindakan']?></span></td>
    </tr>
  </tbody>
</table>
</div>
<p>&nbsp;</p>
</body>
</html>
<?php
}
?>
<script language=javascript>
function printWindow() {
bV = parseInt(navigator.appVersion);
if (bV >= 4) window.print();}
printWindow();
</script>