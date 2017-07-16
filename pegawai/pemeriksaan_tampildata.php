<link rel="stylesheet" href="tabel.css" type="text/css" />
<table cellspacing="1" class="tabelkhusus" border="0" width="100%" >
<tr>
    <form action="pemeriksaan_pencarian.php" method="post">
      <th colspan="13" class="judul"> <div align="right">
  <input type="text" name="nama_pasien" class="cari" size="25" placeholder="Masukkan Nama Pasien" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  <tr>
    <th class="judul2" colspan="13"><div align="center">LAPORAN DATA PEMERIKSAAN</div></th>
  </tr>
  <tr>
    <th width="5%" class="isiform">No</th>
    <th width="12%" class="isiform">Nama Pasien</th>
    <th width="7%" class="isiform"><div align="center">Keluhan</div></th>
    <th width="8%" class="isiform"><div align="center">Diagnosa</div></th>
    <th width="10%" class="isiform"><div align="center">Perawatan</div></th>
    <th width="11%" class="isiform"><div align="center">Tindakan</div></th>
    <th width="9%" class="isiform">Berat Badan</th>
    <th width="10%" class="isiform">Tensi Diastolik</th>
    <th width="9%" class="isiform">Tensi Sistolik</th>
    <th width="9%" class="isiform"><div align="center">No Resep</div></th>
    <th class="isiform" colspan="3"><div align="center">Aksi</div></th>
  </tr>
  <?php
include "koneksi.php";
$query = mysql_query("select pasien.*,pemeriksaan.*,pendaftaran.* from pasien,pendaftaran,pemeriksaan where pasien.no_pasien=pendaftaran.no_pasien and pendaftaran.no_pendaftaran=pemeriksaan.no_pendaftaran");
$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				?>
  <tr class="isiform1"  bgcolor=<?php echo "$bgcolor"; ?>>
    <td class="isiform1"><div align="center">
    <?php echo $nomor;?></span>
    <input type="hidden" name="no_pemeriksaan" size="40" value="<?php echo "'$data[no_pemeriksaan]'";?>" class="inputtext" />
    <input type="hidden" name="no_pendaftaran" size="40" value="<?php echo "'$data[no_pendaftaran]'";?>" class="inputtext" />
    </span></div></td>
    <td class="isiform1"><em><?php echo $data['nama_pasien']; ?></em></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["keluhan"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["diagnosa"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["perawatan"]; ?> </em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["tindakan"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["berat_badan"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["tensi_diastolik"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["tensi_sistolik"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["no_resep"]; ?> </em></div></td>
  	<td width="4%" class="isiform1"><em><?php echo "<a href=buktipembayaran.php?no_pemeriksaan=$data[no_pemeriksaan]><img src='../img/print.png' width='30px' height='30px' /></a>";?></em></td>
  </tr>
 <?php $nomor++;}?>
</table>
<p>&nbsp;</p>


