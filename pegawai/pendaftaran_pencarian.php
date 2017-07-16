<link rel="stylesheet" href="tabel.css" type="text/css" />
    <div align="center">
      <table border="0" class="tabel" cellspacing="1" width="98%" >
        <tr>
          <th class="judul" colspan="10"><div align="right">
  <input type="text" name="nama_pasien"  class="cari" size="25" placeholder="Masukkan Nama" />
  &nbsp;&nbsp;</div></th>
        </tr>
        <tr>
          <th class="judul2" colspan="10"><div align="center">Laporan Data Pendaftaran</div></th>
    </tr>
        <tr>
          <th class="isiform">No</th>
<th class="isiform">Nama Pasien</th>
<th class="isiform">Tanggal Pendaftaran</th>
<th class="isiform">No Urut</th>
<th class="isiform">Nama Dokter</th>
<th class="isiform">Jenis Pemeriksaan</th>
<th class="isiform">Nama Petugas</th>
  <th class="isiform" colspan="3"><div align="center">Aksi</div></th>
  </tr>
        <?php
include "koneksi.php";
include "tanggal.php";
$query = mysql_query("select pendaftaran.*,jadwal_praktek.*,dokter.*,jenisbiaya.*,pegawai.*,pasien.* from pendaftaran,jadwal_praktek,dokter,jenisbiaya,pegawai,pasien where jadwal_praktek.kode_jadwal=pendaftaran.kode_jadwal and dokter.kode_dokter=jadwal_praktek.kode_dokter and jenisbiaya.id_jenisbiaya=pendaftaran.id_jenisbiaya and pasien.no_pasien=pendaftaran.no_pasien and pegawai.nip=pendaftaran.nip and nama_pasien like '%$_POST[nama_pasien]%'")or die(mysql_error);
$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				 $tanggaldaftar=tgl_indo($data['tgl_pendaftaran']);
				?>
        <tr class="isiform1"  bgcolor=<?php echo "$bgcolor"; ?>>
          <td class="isiform1"><div align="center"><?php echo $nomor;?></div></td>
      <td class="isiform1"><div align="center"><em><?php echo $data['nama_pasien']; ?>
            <input type="hidden" name="no_pendaftaran" size="40" value="<?php echo "'$data[no_pendaftaran]'";?>" class="inputtext" />
            <input type="hidden" name="no_pasien" size="40" value="<?php echo "'$data[no_pasien]'";?>" class="inputtext" />
      </em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo $tanggaldaftar?></em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo $data['no_urut']; ?></em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['nama_dokter']; ?></em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['nama_biaya']; ?></em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['nama_pegawai']; ?></em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo "<a href=pendaftaran_edit.php?no_pendaftaran=$data[no_pendaftaran]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo "<a href=pendaftaran_delete.php?no_pendaftaran=$data[no_pendaftaran]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo "<a href=kartupendaftaran.php?no_pendaftaran=$data[no_pendaftaran]><img src='print.png' width='30px' height='30px' /></a>";?></em></div></td>
    </tr> <?php
}
?>
      </table>
</div>