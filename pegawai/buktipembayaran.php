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

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.style5 {font-size: 24px}
</style>
</head>
<body>
<div align="center">

<table width="98%" height="340" border="0">
  <tbody>
    <tr>
      <td colspan="4" style="text-align: center"><img src="pembayaran.png" width="1053" height="228"></td>
    </tr>
    
    <tr>
      <td height="24" colspan="4" style="text-align: right"><hr width="100%" size="3" color="#000000" /></td>
      </tr>
       <?php
	 include "koneksi.php";$totalobat=0;
	 include "tanggal.php";
	 $sql="select   pasien.*,pendaftaran.*,pemeriksaan.*,jenisbiaya.*,dokter.*,jadwal_praktek.* from pasien,pendaftaran,pemeriksaan,jenisbiaya,dokter,jadwal_praktek where pasien.no_pasien=pendaftaran.no_pasien and pendaftaran.no_pendaftaran=pemeriksaan.no_pendaftaran and jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and dokter.kode_dokter=jadwal_praktek.kode_dokter and jadwal_praktek.kode_jadwal=pendaftaran.kode_jadwal and pemeriksaan.no_pemeriksaan='$_REQUEST[no_pemeriksaan]'  ";
	 	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	  $tanggal_lahir=tgl_indo($data['tanggal_lahir_pasien']);

	 ?>
    <tr>
      <td width="14%" style="text-align: left">&nbsp;</td>
      <td width="21%" height="24" class="style5" style="text-align: left"><span class="style5">No Pemeriksaan</span></td>
      <td width="3%" class="style5"><strong>:</strong></td>
      <td width="62%" class="style5"><span class="style5"><?php echo $data['no_pemeriksaan']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Nama Pasien</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['nama_pasien']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Tanggal Lahir</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $tanggal_lahir?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Jenis Kelamin</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['jenis_kelamin']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Jenis Pemeriksaan</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['nama_biaya']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left">Biaya Pemeriksaan</td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><?php echo "Rp. ".number_format($data['tarif'],2); ?></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Keluhan</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['keluhan']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Diagnosa</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['diagnosa']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Perawatan</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['perawatan']?></span></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left">Tindakan</td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><?php echo $data['tindakan']?></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td height="24" class="style5" style="text-align: left"><span class="style5">Dokter</span></td>
      <td class="style5"><strong>:</strong></td>
      <td class="style5"><span class="style5"><?php echo $data['nama_dokter']?></span></td>
    </tr>
  </tbody>
</table>
<center> 
<table cellspacing="1" border="0" class="tabel5" width="100%" >
  <tr>
    <th class="ht" colspan="12"><div align="center" class="style5">Laporan Data Resep</div></th>
  </tr>
  <tr > 
   
     
    <th class="isiform2"><div align="center">Nama Obat</div></th>
    <th class="isiform2"><div align="center">Dosis</div></th>
    <th class="isiform2"><div align="center">Jumlah</div></th>
    <th class="isiform2"><div align="center">Harga</div></th>
    <th class="isiform2"><div align="center">Total</div></th>
  </tr>
  
  <tr >
   
    <?php
include "koneksi.php";$totalobat=0;$totalbayar=0;
$query = mysql_query("select resep.*,obat.*,pemeriksaan.*,dosis.*,jenisbiaya.*,pendaftaran.* from resep,obat,pemeriksaan,dosis,jenisbiaya,pendaftaran where resep.kode_obat=obat.kode_obat and resep.no_resep=pemeriksaan.no_resep  and dosis.id_dosis=resep.id_dosis and jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and pendaftaran.no_pendaftaran=pemeriksaan.no_pendaftaran and jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and pemeriksaan.no_pemeriksaan='$_REQUEST[no_pemeriksaan]'");
				while($data=mysql_fetch_array($query))
				{
				?>
    <td class="isiform2"><div align="left"><em><?php echo $data["nama_obat"]; ?></em></div></td>
    <td class="isiform2"><div align="left"><em><?php echo $data["nama_dosis"]; ?></em><span class="isiformin">
      <input type="hidden" name="tarif" value=<?php echo "'$data[tarif]'";?> />
    </span></div></td>
    <td class="isiform2"><div align="right"><em><?php echo $data["jumlah"]; ?> </em></div></td>
	<td class="isiform2"><div align="right"><em><?php echo "Rp. ".number_format($data["harga_jual"],2); ?> </em></div></td> 
    <?php
	
	$total=$data['jumlah']*$data['harga_jual'];
	$totalobat=$totalobat+$total;
	$totalbayar=$totalobat+$data['tarif'];
	?>
    <td class="isiform2" align="right"><em><?php echo "Rp. ".number_format($total,2);?></em></td>
  </tr>
  <?php
}
?>
</table>
<div align="center">
  <table width="98%" border="0">
    <tr>
      <td colspan="5" class="style5"><div align="right">
        <?php 
echo "Jumlah : Rp. ".number_format($totalobat,2);
?>
      </div></td>
    </tr>
    <tr>
    <?php
	 include "koneksi.php";$totalobat=0;
	 $sql="select   pasien.*,pendaftaran.*,pemeriksaan.*,jenisbiaya.* from pasien,pendaftaran,pemeriksaan,jenisbiaya where pasien.no_pasien=pendaftaran.no_pasien and pendaftaran.no_pendaftaran=pemeriksaan.no_pendaftaran and jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and pemeriksaan.no_pemeriksaan='$_REQUEST[no_pemeriksaan]'  ";
	 	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>
      <td colspan="5" class="style5"><div align="right"><span style="text-align: left">Biaya Pemeriksaan</span> : <span class="style5"><?php echo "Rp. ".number_format($data['tarif'],2);?></span><span class="style5"></span></div></td>
    </tr>
    <tr>
      <td colspan="5" class="style5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" class="style5"><div align="right"><?php 
echo "Total Bayar : Rp.  ".number_format($totalbayar,2);
}
?>
</td>
    </tr>
    <tr>
      <td colspan="5" class="style5"><div align="right"></div></td>
      </tr>
    <tr>
   
      <td height="53" colspan="5" class="style5"><div align="right" class="style5">Temanggung,&nbsp;&nbsp;<?php echo date("d-m-Y") ?>&nbsp;&nbsp;</div></td>
      </tr>
    <tr>
      <td width="8%" class="style5">&nbsp;</td>
      <td width="11%" class="style5">&nbsp;</td>
      <td width="11%" class="style5">&nbsp;</td>
      <td width="45%" class="style5">&nbsp;</td>
      <td width="25%" class="style5"><div align="center">Petugas</div></td>
    </tr>
    <tr>
        <?php
 include ("koneksi.php");
$sql="select * from pegawai where  username='$username'";
$query=mysql_query($sql) or die ("Query Salah");
?>
         <?php
while($row=mysql_fetch_array($query)){
?>
      <td class="style5">&nbsp;</td>
      <td class="style5">&nbsp;</td>
      <td class="style5">&nbsp;</td>
      <td class="style5">&nbsp;</td>
      <td rowspan="2" class="style5"><div align="center">
        <p>&nbsp;</p>
        <p>(<?php echo $row['nama_pegawai']; ?>) </p>
      </div></td>
    </tr>
    <tr>
      <td class="style5">&nbsp;</td>
      <td class="style5">&nbsp;</td>
      <td class="style5">&nbsp;</td>
      <td class="style5">&nbsp;</td>
      </tr>
  </table>
 
</div>


</center>






</div>
<p>&nbsp;</p>
</body>
</html>
<?php
}
}
?>
<script language=javascript>
function printWindow() {
bV = parseInt(navigator.appVersion);
if (bV >= 4) window.print();}
printWindow();
</script>