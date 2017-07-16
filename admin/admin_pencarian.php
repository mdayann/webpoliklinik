<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<table align="center" border="0" cellspacing="1" class="tabel"  width="98%" >
  <tr>
    <form action="admin_pencarian.php" method="post">
      <th colspan="5"  class="judul"> <div align="right">
  <input type="text" name="username" class="cari" size="25" placeholder="Masukkan Username" />
  &nbsp;&nbsp;&nbsp;&nbsp; </div></th>
    </form>
  </tr>
  <tr>
    <th class="judul2" colspan="5">Laporan Data Buku</th>
  </tr>
  <tr>
    <th width="12%" class="isiform">No</th>
    <th width="35%" class="isiform">Username</th>
    <th width="32%" class="isiform"> Password</th>
    <th colspan="2" class="isiform">Aksi</th>
  </tr>
  <?php
				include ("koneksi.php");
				$query = mysql_query("select * from admin where username like '%$_POST[username]%'") or die(mysql_error);
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
    <td class="isiform1"><?php echo $data["1"];?>
        <input type="hidden" name="no" size="40" value="<?php echo "'$data[no]'";?>" class="inputtext" /></td>
    <td class="isiform1"><?php echo $data["2"]; ?></td>
    <td width="11%" class="isiform1"><?php echo "<a href=admin_edit.php?no=$data[no]>
				<img src='../img/edit.png' width='30px' height='30px'/></a>";?></td>
    <td width="10%" class="isiform1"><?php echo "<a href=databuku.php?kd_buku=$data[kd_buku]&&hapus=oke><img src='../img/delete.png' width='30px' height='30px'/></a>";?></td>
  </tr>
  <?php $nomor++;}?>
</table>
</body>
</html>
