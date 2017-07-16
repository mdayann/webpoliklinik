<head>
<title>tampil data pegawai</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<table border="0" align="center" cellspacing="1" class="tabel" width="98%" >
  <tr>
    <form action="pegawai_pencarian.php" method="post">
      <th colspan="10" class="judul" > <div align="right">
  <input type="text" name="nip" class="cari" size="25" placeholder="Masukkan NIP" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="10">Laporan Data Pegawai</th>
  </tr>
  <tr>
    <th width="4%" class="isiform">No</th>
    <th width="13%" class="isiform">NIP</th>
    <th width="12%" class="isiform">Nama Pegawai</th>
    <th width="12%" class="isiform">Alamat Pegawai</th>
    <th width="11%" class="isiform">Telephone Pegawai</th>
    <th width="11%" class="isiform">Jenis Kelamin</th>
    <th width="13%" class="isiform">Username</th>
    <th width="13%" class="isiform">Password</th>
    <th colspan="2" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from pegawai") or die(mysql_error);
				$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				?>
  <tr class='isiform1'   bgcolor=<?php echo "$bgcolor"; ?>>
    <td class="isiform1"><div align="center">
    <?php echo $nomor;?></div></td>
    <td class="isiform1"><?php echo $data["0"];?></td>
    <td class="isiform1"><?php echo $data["1"];?></td>
    <td class="isiform1"><?php echo $data["2"];?></td>
    <td class="isiform1"><?php echo $data["3"];?></td>
    <td class="isiform1"><?php echo $data["4"];?></td>
    <td class="isiform1"><?php echo $data["5"];?></td>
    <td class="isiform1"><?php echo $data["6"];?></td>
    <td width="4%" class="isiform1"><?php echo "<a href=pegawai_edit.php?nip=$data[nip]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="7%" class="isiform1"><?php echo "<a href=pegawai_delete.php?nip=$data[nip]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
</body>
</html>