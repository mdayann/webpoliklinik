<link rel="stylesheet" href="tabel.css" type="text/css" />
<table cellspacing="1" class="tabel" border="0" width="98%" >
  <tr>
    <form action="pemeriksaan_pencarian.php" method="post">
      <th colspan="15" class="judul"> <div align="right">
        <input type="text" name="nama_pasien" class="cari" size="25" placeholder="Masukkan Nama Pasien" />
        &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="15"><div align="center">LAPORAN DATA PEMERIKSAAN</div></th>
  </tr>
  <tr>
    <th width="4%" class="isiform">No</th>
    <th width="11%" class="isiform"><div align="center">No Pemeriksaaan</div></th>
    <th width="11%" class="isiform">Nama Pasien</th>
    <th width="6%" class="isiform"><div align="center">Keluhan</div></th>
    <th width="7%" class="isiform"><div align="center">Diagnosa</div></th>
    <th width="8%" class="isiform"><div align="center">Perawatan</div></th>
    <th width="7%" class="isiform"><div align="center">Tindakan</div></th>
    <th width="10%" class="isiform">Berat Badan</th>
    <th width="11%" class="isiform">Tensi Diastolik</th>
    <th width="10%" class="isiform">Tensi Sistolik</th>
    <th width="8%" class="isiform"><div align="center">No Resep</div></th>
    <th class="isiform" colspan="3"><div align="center">Aksi</div></th>
  </tr>
  <?php
include "koneksi.php";
$query = mysql_query("select pasien.*,pemeriksaan.*,pendaftaran.* from pasien,pendaftaran,pemeriksaan where pasien.no_pasien=pendaftaran.no_pasien and pendaftaran.no_pendaftaran=pemeriksaan.no_pendaftaran and nama_pasien like '%$_POST[nama_pasien]%'");
$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				?>
  <tr class="isiform1">
    <td class="isiform1"><div align="center"> <?php echo $nomor;?></span></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["no_pemeriksaan"];?></em>
            <input type="hidden" name="no_pendaftaran2" size="40" value="<?php echo "'$data[no_pendaftaran]'";?>" class="inputtext" />
            </span></div></td>
    <td class="isiform1"><em><?php echo $data['nama_pasien']; ?></em></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["2"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["3"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["4"]; ?> </em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["5"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["6"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["7"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["8"]; ?> </em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["9"]; ?> </em></div></td>
    <td width="2%" class="isiform1"><em><?php echo "<a href=pemeriksaan_edit.php?no_pemeriksaan=$data[no_pemeriksaan]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></em></td>
    <td width="2%" class="isiform1"><em><?php echo "<a href=pemeriksaan_delete.php?no_pemeriksaan=$data[no_pemeriksaan]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></em></td>
    <td width="3%" class="isiform1"><em><?php echo "<a href=buktipemeriksaan.php?no_pendaftaran=$data[no_pendaftaran]><img src='../img/print.png' width='30px' height='30px' /></a>";?></em></td>
  </tr>
  <?php $nomor++;}?>
</table>
<p>&nbsp;</p>


