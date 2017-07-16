
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<div align="center">
<?php
	 include "koneksi.php";
	 $sql="select  pendaftaran.*,pegawai.*,jadwal_praktek.*,dokter.*,jenisbiaya.*   from pendaftaran,pegawai,jadwal_praktek,dokter,jenisbiaya where jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and jadwal_praktek.kode_jadwal=pendaftaran.kode_jadwal and jadwal_praktek.kode_dokter=dokter.kode_dokter and pegawai.nip=pendaftaran.nip and no_pendaftaran='$_REQUEST[no_pendaftaran]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>		
 <form method="POST" action="pendaftaran_editproses.php">
  
        <table border="0" class="borderform">
	  <tr>
            <td colspan="3" class="judul1"><div align="center">Form Edit Pendaftaran</div></td>
          </tr>
          <tr>
            <td width="443" class="isiformin">No Pasien</td>
            <td width="41" class="isiformin"><strong>:</strong></td>
            <td width="751" class="isiformin"><input style="width:45.5%" type="text" name="no_pasien" class="inputtextform1" value="<?php echo $data['no_pasien']?>" id="no_pasien" > <input type="hidden" name="no_pendaftaran" size="40" value=<?php echo "'$data[no_pendaftaran]'";?> class="inputtextform1" />
              <em>
              <input type="hidden" name="nip" size="40" value="<?php echo "'$data[nip]'";?>"  />
            </em></td>
          </tr>
          <tr>
            <td class="isiformin">Dokter Yang Bertugas</td>
            <td class="isiformin"><strong>:</strong></td>
            <td class="isiformin"><select name="kode_jadwal" style="width:48%" class="dropdown">
                            <option value="<?php echo $data['kode_jadwal']?>"><?php echo $data['nama_dokter']?></option>

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
            </select></td>
          </tr>
          <tr>
            <td class="isiformin">Id Jenis Biaya</td>
            <td class="isiformin"><strong>:</strong></td>
            <td class="isiformin"><select name="id_jenisbiaya" style="width:48%" class="dropdown">
                         <option value="<?php echo $data['id_jenisbiaya']?>"><?php echo $data['nama_biaya']?></option>

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
           </select></td>
          </tr>
          <tr>
            <td class="isiformin"><div align="right">
              <input type="submit" value="Edit" class="tombol" />
            </div></td>
            <td class="isiformin">&nbsp;</td>
            <td class="isiformin"><input type="button" value="back" class="tombol" onClick="self.history.back()" /></td>
          </tr>
          <?php
		  }
		  ?>
        </table>
    <p>&nbsp;</p>
</form>
</div>
</body>
</html>