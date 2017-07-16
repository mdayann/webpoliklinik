<head>
<title>data admin</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<div align="center">
<body>
<table border="0" cellspacing="1" class="tabel"  width="98%" >
 
  <tr> <form action="admin_pencarian.php" method="post">
    <th colspan="5"  class="judul" > 
      <div align="right">
  <input type="text" name="username" class="cari" size="25" placeholder="Masukkan Username" />
  &nbsp;&nbsp;&nbsp;&nbsp;    </div></th>
  </form>
  </tr>
  <tr>
    <th class="judul2" colspan="5">Laporan Data Admin</th>
  </tr>
  <tr>
    <th width="10%" class="isiform">No</th>
    <th width="23%" class="isiform">Username</th>
    <th width="41%"  class="isiform"> Password</th>
    <th colspan="2" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from admin") or die(mysql_error);
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
    <?php echo $nomor;?></td></div>
    <td class="isiform1"><?php echo $data["1"];?>
    <input type="hidden" name="no" size="40" value=<?php echo "'$data[no]'";?> class="inputtext" /></td>
    <td width="3%" class="isiform1"><?php echo $data["2"]; ?></td>
    <td width="11%" class="isiform1"><?php echo "<a href=admin_edit.php?no=$data[no]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="12%"  class="isiform1"><?php echo "<a href=admin_delete.php?no=$data[no]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
<p>&nbsp;</p>
</body>
</html>
</div>
