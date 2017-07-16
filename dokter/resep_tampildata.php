
<div align="center">
<table cellspacing="1" class="tabel" width="98%" >
  <tr>
    <th class="judul" colspan="12"><div align="center">Laporan Data Buku</div></th>
  </tr>
  <tr>
    <th class="isiform"><div align="center">Id Resep</div></th>
    <th class="isiform"><div align="center">No Resep</div></th>
    <th class="isiform"><div align="center">Nama Obat</div></th>
    <th class="isiform"><div align="center">Dosis</div></th>
    <th class="isiform"><div align="center">Jumlah</div></th>
    
    <th class="isiform" colspan="2"><div align="center">Aksi</div></th>
  </tr>
  <?php
include "koneksi.php";
$query = mysql_query("select resep.*,obat.* from resep,obat.*from resep,obat where resep.kode_obat=obat.kode_obat and resep.no_resep='$_POST[no_resep]';" );
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				?>
  <tr class="isiform1" bgcolor=<?php echo "$bgcolor"; ?>>
    <td class="isiform1"><div align="center"><em><?php echo $data["0"];?></em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["1"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["nama_obat"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["dosis"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["4"]; ?> </em></div></td>
 
    <td class="isiform1"><em><?php echo "<a href=resep_edit.php?id_resep=$data[id_resep]>
				  <img src='../img/edit.png' width='30px' height='30px'/></a>";?></em></td>
    <td class="isiform1"><em><?php echo "<a href=resep_delete.php?id_resep=$data[id_resep]&&hapus=oke ><img src='../img/delete.png' />Hapus</a>";?></em></td>
  </tr>
  <?php
}
?>
<img src="../img/delete.png" />
</table>
<p>&nbsp;</p>

</div>
