<link rel="stylesheet" href="tabel.css" type="text/css" />
<table border="0" class="tabel"  cellspacing="1" width="98%" >
  <tr>
    <form action="dosis_pencarian.php" method="post">
      <th class="judul" colspan="9"> <div align="right">
  <input type="text" name="id_dosis" class="cari" size="25" placeholder="Masukkan Id Dosis" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="9">Laporan Data Dosis</th>
  </tr>
  <tr>
    <th width="12%" class="isiform">No</th>
    <th width="35%" class="isiform">Id Dosis</th>
    <th width="35%" class="isiform">Jenis  Dosis</th>
    <th colspan="3" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from dosis") or die(mysql_error);
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
    <?php echo $nomor;?></div></td>
    <td class="isiform1"><?php echo $data["0"];?></td>
    <td class="isiform1"><?php echo $data["1"];?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=dosis_edit.php?id_dosis=$data[id_dosis]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=dosis_delete.php?id_dosis=$data[id_dosis]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
<p>&nbsp;</p>
