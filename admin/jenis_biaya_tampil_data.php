<head>
<title>data jenis</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<div align="center">
<body>
<table border="0" cellspacing="1" class="tabel" width="98%" >
  <tr>
    <form action="biaya_pencarian.php" method="post">
      <th colspan="9" class="judul" ><div align="right"> <input type="text" name="nama_biaya" class="cari" size="25"  placeholder="Masukkan Nama Biaya" />
        &nbsp;&nbsp;
        &nbsp;&nbsp;</div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="9">Laporan Data Jenis Biaya</th>
  </tr>
  <tr>
    <th width="12%" class="isiform">No</th>
   
    <th width="35%" class="isiform">NAMA BIAYA</th>
    <th width="32%" class="isiform">TARIF</th>
    <th colspan="3" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from jenisbiaya") or die(mysql_error);
				$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				?>
  <tr class='isiform1'   bgcolor=<?php echo "$bgcolor"; ?>>
    <td class="isiform1"><div align="center"><?php echo $nomor;?>
        <input type="hidden" name="id_jenisbiaya2" size="40" value=<?php echo "'$data[id_jenisbiaya]'";?> class="inputtext" />
    </div></td>

    <td class="isiform1"><?php echo $data["1"];?></td>
    <td class="isiform1"><?php echo $data["2"]; ?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=jenis_biaya_edit.php?id_jenisbiaya=$data[id_jenisbiaya]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=jenis_biaya_delete.php?id_jenisbiaya=$data[id_jenisbiaya]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
<p>&nbsp;</p>
</body>
</html>
</div>
