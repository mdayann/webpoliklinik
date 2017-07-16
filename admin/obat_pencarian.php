<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<table border="0" align="center" cellspacing="1" class="tabel" width="98%" >
  <tr>
    <form action="obat_pencarian.php" method="post">
      <th colspan="9" class="judul"> <div align="right">
  <input type="text" name="kode_obat" class="cari" size="25" placeholder="Masukkan Kode Obat" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="9">Laporan Data Obat</th>
  </tr>
  <tr>
    <th width="6%" class="isiform">No</th>
    <th width="13%" class="isiform">Kode Obat</th>
    <th width="21%" class="isiform">Nama Obat</th>
    <th width="16%" class="isiform">Merk</th>
    <th width="16%" class="isiform">Satuan</th>
    <th width="16%" class="isiform">Harga Jual</th>
    <th colspan="3" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from obat where kode_obat like '%$_POST[kode_obat]%'") or die(mysql_error);
				$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				?>
  <tr class='isiform1' bgcolor=<?php echo "$bgcolor"; ?>>
    <td class="isiform1"><div align="center">
    <?php echo $nomor;?></div></td>
    <td class="isiform1"><div align="center">
    <?php echo $data["0"];?></div></td>
    <td class="isiform1"><?php echo $data["1"];?></td>
    <td class="isiform1"><?php echo $data["2"]; ?></td>
    <td class="isiform1"><?php echo $data["3"]; ?></td>
    <td class="isiform1"><?php echo $data["4"]; ?></td>
    <td width="5%" class="isiform1"><?php echo "<a href=jenis_obat_edit.php?kode_obat=$data[kode_obat]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="7%" class="isiform1"><?php echo "<a href=jenis_obat_delete.php?kode_obat=$data[kode_obat]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
</body>
</html>
