<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="tabel.css">
<style type="text/css">
.style2 {font-size: 24px}
.style5 {font-size: 22px; }
.style6 {
	font-size: 18px
}
.style7 {font-size: 16px; }
</style>
</head>

<body>
<div align="left" class="tabel4">
<?php
	 include "koneksi.php";
	 include "tanggal.php";
	 $sql="select   pasien.*,pendaftaran.*,jenisbiaya.*,jadwal_praktek.*,dokter.* from pasien,pendaftaran,jenisbiaya,jadwal_praktek,dokter where   pasien.no_pasien=pendaftaran.no_pasien and jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and dokter.kode_dokter=jadwal_praktek.kode_dokter and jadwal_praktek.kode_jadwal=pendaftaran.kode_jadwal and pendaftaran.no_pendaftaran='$_REQUEST[no_pendaftaran]'  ";
	 
	 
	 	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	  $tanggal_lahir=tgl_indo($data['tanggal_lahir_pasien']);
	   $tanggal_daftar=tgl_indo($data['tgl_pendaftaran']);
	 ?>
<table width="100%" height="335" border="0">
    <tr>
      <td colspan="4" style="text-align: center"><img src="pendaftaran.png" width="95%" height="94">
      <hr width="100%" size="3" color="#000000" /></td>
    </tr>
      <tr>
      <td width="2%" style="text-align: left">&nbsp;</td>
      <td width="38%" height="24" class="style7" style="text-align: left">No Pendaftaran</td>
      <td width="5%" class="style5">:</td>
      <td width="55%" class="style5"><span class="style7"><?php echo $data['no_pendaftaran']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Nama Pasien</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $data['nama_pasien']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Tanggal Lahir</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $tanggal_lahir?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Alamat</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $data['alamat_pasien']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Jenis Kelamin</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $data['jenis_kelamin']?></span></td>
    </tr>
    	
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Tanggal Daftar</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $tanggal_daftar?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Nomor Urut</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $data['no_urut']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Jenis Biaya</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $data['nama_biaya']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style7" style="text-align: left">Dokter</td>
      <td class="style5">:</td>
      <td class="style5"><span class="style7"><?php echo $data['nama_dokter']?></span></td>
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