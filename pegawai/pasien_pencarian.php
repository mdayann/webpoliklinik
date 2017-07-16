<link rel="stylesheet" href="tabel.css" type="text/css" />
    <div align="center">
     <table border="0"  cellspacing="1" class="tabel" width="98%" >
      <tr>
          
          <form action="pasien_pencarian.php" method="post">          
        <th class="judul" colspan="11"><div align="right">
  <input type="text" name="nama_pasien"  class="cari" size="25" size="40" placeholder="Masukkan Nama" />
  &nbsp;&nbsp;</div></th>
          </form></tr>
       
        <tr>
        <tr>
          <th class="judul2" colspan="10"><div align="center">Laporan Data Pasien</div></th>
    </tr>
        <tr>
          <th class="isiform"><div align="center">Nomor Pasien</div></th>
  <th class="isiform"><div align="center">Nama Pasien </div></th>
  <th class="isiform"><div align="center">Alamat Pasien </div></th>
  <th class="isiform"><div align="center">Tanggal Lahir Pasien </div></th>
  <th class="isiform"><div align="center">Telepon Pasien </div></th>
  <th class="isiform"><div align="center">Jenis Kelamin Pasien </div></th>
  <th class="isiform"><div align="center">Tanggal Regristasi</div></th>
  <th class="isiform" colspan="3"><div align="center">Aksi</div></th>
  </tr>
        <?php
include "koneksi.php";
include "tanggal.php";
$query = mysql_query("select*from pasien where nama_pasien like '%$_POST[nama_pasien]%'")or die(mysql_error);
				$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				$tanggal=tgl_indo($data['tanggal_lahir_pasien']);
				$tanggalregistrasi=tgl_indo($data['tanggal_registrasi']);
				?>
        <tr class="isiform1"  bgcolor=<?php echo "$bgcolor"; ?>>
          <td class="isiform1"><div align="center"><?php echo $nomor;?></span><em>
            <input type="hidden" name="no_pasien" size="40" value="<?php echo "'$data[no_pasien]'";?>" class="inputtext" />
          </em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['nama_pasien']; ?></em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['alamat_pasien']; ?></em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $tanggal ?></em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['telp']; ?> </em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $data['jenis_kelamin']; ?> </em></div></td>
      <td class="isiform1"><div align="left"><em><?php echo $tanggalregistrasi ?> </em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo "<a href=pasien_edit.php?no_pasien=$data[no_pasien]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></em></div></td>
      <td class="isiform1"><div align="center"><em><?php echo "<a href=pasien_delete.php?no_pasien=$data[no_pasien]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></em></div></td>
       <td class="isiform1"><div align="center"><em><?php echo "<a href=kartupeserta.php?no_pasien=$data[no_pasien]><img src='print.png' width='30px' height='30px' /></a>";?></em></div></td>
    </tr>   <?php $nomor++;}?>
      </table>
</div>
   