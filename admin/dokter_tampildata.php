<head>
<title>tampil data dokter</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<div align="center">
<body>
<table border="0" class="tabel" cellspacing="1" width="98%" >
  <tr>
    <form action="dokter_pencarian.php" method="post">
      <th colspan="9" class="judul"> <div align="right">
  <input type="text" name="nama_dokter" class="cari" size="25"placeholder="Masukkan Nama Dokter" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="9">Laporan Data Dokter</th>
  </tr>
  <tr>
    <th width="12%" class="isiform">No</th>
    <th width="35%" class="isiform">Kode Dokter</th>
    <th width="35%" class="isiform">Nama Dokter</th>
    <th width="32%" class="isiform">Alamat Dokter</th>
    <th width="32%" class="isiform">Telepon Dokter</th>
    <th width="32%" class="isiform">Username</th>
    <th width="32%" class="isiform">Password</th>
    <th colspan="3" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from dokter") or die(mysql_error);
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
    <?php echo $nomor;?></td></div>
    <td class="isiform1"><div align="center">
    <?php echo $data["0"];?></td></div>
    <td class="isiform1"><?php echo $data["1"];?></td>
    <td class="isiform1"><?php echo $data["2"]; ?></td>
    <td class="isiform1"><?php echo $data["3"]; ?></td>
    <td class="isiform1"><?php echo $data["4"]; ?></td>
    <td width="11%" class="isiform1"><?php echo $data["5"]; ?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=dokter_edit.php?kode_dokter=$data[kode_dokter]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=dokter_delete.php?kode_dokter=$data[kode_dokter]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
</body>
</html>
</div>