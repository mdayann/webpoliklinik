<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.style1 {color: #CC0000}
</style>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<div align="left" class="tabel3">
   <?php
	 include "koneksi.php";
	 include "tanggal.php";
	 $sql="select *  from pasien where  pasien.no_pasien='$_REQUEST[no_pasien]'  ";
	 	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 $tanggal=tgl_indo($data['tanggal_lahir_pasien']);
	 ?>
<table width="100%" height="100%" border="0">
    <tr>
      <td height="148" colspan="4" style="text-align: center"><img src="atas.png" width="100%" height="146"></td>
    </tr>
    <tr>
      <td width="14%" rowspan="5" style="text-align: left"></td>
      <td width="23%" height="21" style="text-align: left">No Pasien</td>
      <td width="11%">:</td>
      <td width="52%"><span class="style1"><?php echo $data['no_pasien']?></span></td>
    </tr>
    <tr>
      <td height="24" style="text-align: left">Nama Pasien</td>
      <td>:</td>
      <td><span class="style1"><?php echo $data['nama_pasien']?></span></td>
    </tr>
    <tr>
      <td height="24" style="text-align: left">Tanggal Lahir</td>
      <td>:</td>
      <td><span class="style1"><?php echo $tanggal ?></span></td>
    </tr>
    <tr>
      <td height="24" style="text-align: left">Alamat</td>
      <td>:</td>
      <td><span class="style1"><?php echo $data['alamat_pasien']?></span></td>
    </tr>
    <tr>
      <td height="24" style="text-align: left">Jenis Kelamin</td>
      <td>:</td>
      <td><span class="style1"><?php echo $data['jenis_kelamin']?></span></td>
    </tr>
     <tr>
      <td height="89" colspan="4" style="text-align: left"><center><img src="bawah.png" width="100%" height="89"></center></td>
      </tr>
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