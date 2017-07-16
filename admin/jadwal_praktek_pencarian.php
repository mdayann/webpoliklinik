<?php
$koneksi=mysql_connect("localhost","root","")or die("MySQL :". mysql_error());
mysql_select_db("poliklinik", $koneksi) or die(mysql_error());
$haricari=$_POST['haricari'];
$query = mysql_query("SELECT * from hari where indonesia like '%$haricari%'", $koneksi)or die(mysql_error);
while($row = mysql_fetch_array($query)){
$hariinggris=$row["0"];
}
?>
<head>
<title>tampil data Jadwal Praktek</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<div align="center">
<body>
<table border="0" cellspacing="1" class="tabel" width="98%" >
  <tr>
    <form action="jadwal_praktek_pencarian.php" method="post">
      <th colspan="8" class="judul" > 
        <div align="right">
  <input type="text" name="haricari" class="cari" size="25" placeholder="Masukkan Nama Hari" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="8">Laporan Jadwal Praktek</th>
  </tr>
  <tr>
    <th width="6%" class="isiform">No</th>
    <th width="14%" class="isiform">Nama Dokter</th>
    <th width="12%" class="isiform">Hari</th>
    <th width="17%" class="isiform">Jam Mulai</th>
    <th width="17%" class="isiform">Jam Selesai</th>
   
    <th colspan="3" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
//ubah nama indo ke inggris-----------------------------------------------------------------------------


				
				$query = mysql_query("select jadwal_praktek.*,dokter.* from jadwal_praktek,dokter where dokter.kode_dokter=jadwal_praktek.kode_dokter and hari like '%$hariinggris%'")or die(mysql_error);
				$nomor=1;
				while($data=mysql_fetch_array($query))
				{
				if($nomor%2==0)
				{ $bgcolor="#b1b1b1"; }
				else
				{ $bgcolor="#5d6d7a"; }
				
				if($data['hari']=="Monday")
				{ $hari="Senin"; }
				elseif($data['hari']=="Tuesday")
				{ $hari="Selasa"; }
				elseif($data['hari']=="Wednesday")
				{ $hari="Rabu"; }
				elseif($data['hari']=="Thursday")
				{ $hari="Kamis"; }
				elseif($data['hari']=="Friday")
				{ $hari="Jumat"; }
				elseif($data['hari']=="Saturday")
				{ $hari="Sabtu"; }
				elseif($data['hari']=="Sunday")
				{ $hari="Minggu"; }
				?>
  <tr class='isiform1' bgcolor=<?php echo "$bgcolor"; ?>>
    <td class="isiform1"><div align="center"><?php echo $nomor;?>
        <input type="hidden" name="kode_jadwal" size="40" value=<?php echo "'$data[kode_jadwal]'";?> class="inputtext" />
    </div></td>
    <td class="isiform1"><?php echo $data["nama_dokter"];?></td>
    <td class="isiform1"><?php echo $hari;?></td>
    <td class="isiform1"><?php echo $data["2"]; ?></td>
    <td class="isiform1"><?php echo $data["3"]; ?></td>
    <td width="8%" class="isiform1"><?php echo "<a href=jadwal_praktek_edit.php?kode_jadwal=$data[kode_jadwal]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="7%" class="isiform1"><?php echo "<a href=jadwal_praktek_delete.php?kode_jadwal=$data[kode_jadwal]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
<p>&nbsp;</p>
</body>
</html>
</div>