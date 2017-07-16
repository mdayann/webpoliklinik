
<center> 
<table cellspacing="1" border="1" class="tabel" width="98%" >
  <tr>
    <th class="judul" colspan="12"><div align="center">Laporan Data Resep</div></th>
  </tr>
  <tr>
    <th class="isiform"><div align="center">Id Resep</div></th>
    <th class="isiform"><div align="center">No Resep</div></th>
    <th class="isiform"><div align="center">Nama Obat</div></th>
    <th class="isiform"><div align="center">Dosis</div></th>
    <th class="isiform"><div align="center">Jumlah</div></th>
    <th class="isiform"><div align="center">Harga</div></th>
    <th class="isiform"><div align="center">Total</div></th>
  </tr>
  <?php
include "koneksi.php";$totalobat=0;
$query = mysql_query("select resep.*,obat.* from resep,obat where resep.kode_obat=obat.kode_obat and resep.no_resep='RSP02'");
				while($data=mysql_fetch_array($query))
				{
				?>
  <tr class="isiform1">
    <td class="isiform1"><div align="center"><em><?php echo $data["id_resep"];?></em></div></td>
    <td class="isiform1"><div align="center"><em><?php echo $data["no_resep"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["nama_obat"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["id_dosis"]; ?></em></div></td>
    <td class="isiform1"><div align="left"><em><?php echo $data["jumlah"]; ?> </em></div></td>
	<td class="isiform1"><div align="left"><em><?php echo $data["harga_jual"]; ?> </em></div></td> 
    <?php
	
	$total=$data['jumlah']*$data['harga_jual'];
	$totalobat=$totalobat+$total;
	?>
    <td class="isiform1"><em><?php echo "$total";?></em></td>
  </tr>
  <?php
}
?>
</table>
<?php 
echo "Total Obat : $totalobat";
?>
</center>


