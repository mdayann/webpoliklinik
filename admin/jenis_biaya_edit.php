<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<form action="jenis_biaya_edit_proses.php" method="post">
<?php
	 include "koneksi.php";
	 $sql="select * from jenisbiaya where id_jenisbiaya='$_REQUEST[id_jenisbiaya]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>	
  <table width="456" border="0" align="center" class="borderform">
    <tr>
      <td colspan="3" align="right" class="judul1"><div align="center">FORM EDIT JENIS BIAYA</div></td>
    </tr>
    <tr>
          <td width="165" class="isiformin" align="right">  <div align="left">Nama Jenis Biaya</div></td> 
          <td width="10" class="isiformin"><strong>:</strong></td>
          <td width="272" class="isiformin"><input type="text" name="nama_biaya" class="inputtextform1" value="<?php echo $data['nama_biaya']?>"  size="40" maxlength="30"  />
      <input type="hidden" name="id_jenisbiaya" size="40" value=<?php echo "'$data[id_jenisbiaya]'";?> class="inputtext" />      </td> </tr><tr>
			<td align="right" class="isiformin"><div align="left">Tarif</div></td>
			<td class="isiformin"><strong>:</strong></td>
		<td class="isiformin"><input type="text" name="tarif" class="inputtextform1" value="<?php echo $data['tarif']?>"  size="40" maxlength="25"  />		    </td>
          </tr><tr>   <td class="isiformin">
	        <div align="right">
	          <input type="submit" value="Edit" class="tombol" />
                </div></td>
        <td class="isiformin">&nbsp;</td>
        <td class="isiformin">
		<input type="button" value="back" class="tombol" onClick="self.history.back()" />        </td></tr>           
          <?php
}
?></table>
</form>
</body>
</html>
