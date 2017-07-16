<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<form action="jenis_obat_edit_proses.php" method="post">
<?php
	 include "koneksi.php";
	 $sql="select * from obat where kode_obat='$_REQUEST[kode_obat]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>	
  <table width="456" border="0" align="center" class="borderform">
    <tr>
      <td colspan="3" align="right" class="judul1"><div align="center">FORM EDIT OBAT</div></td>
    </tr>
    <tr>
          <td width="165" class="isiformin" align="right">  <div align="left">Nama Obat</div></td> 
          <td width="10" class="isiformin"><strong>:</strong></td>
          <td width="272" class="isiformin"><input type="text" name="nama_obat" class="inputtextform1" value="<?php echo $data['nama_obat']?>"  size="40" maxlength="30"  />
      <input type="hidden" name="kode_obat" size="40" value=<?php echo "'$data[kode_obat]'";?> class="inputtext" />      </td> </tr>
      <tr>
			<td align="right" class="isiformin"><div align="left">Merk</div></td>
			<td class="isiformin"><strong>:</strong></td>
			<td class="isiformin"><input type="text" name="merk" class="inputtextform1" value="<?php echo $data['merk']?>"  size="40" maxlength="25"  />		    </td>
          </tr> <tr>
          <td width="165" class="isiformin" align="right">  <div align="left">Satuan</div></td> 
          <td width="10" class="isiformin" ><strong>:</strong></td>
          <td width="272" class="isiformin" ><input type="text" name="satuan" class="inputtextform1" value="<?php echo $data['satuan']?>"  size="40" maxlength="30"  />
          </td> </tr> <tr>
          <td width="165" class="isiformin" align="right">  <div align="left">Harga Jual</div></td> 
          <td width="10" class="isiformin"><strong>:</strong></td>
          <td width="272" class="isiformin"><input type="text" name="harga_jual" class="inputtextform1" value="<?php echo $data['harga_jual']?>"  size="40" maxlength="30"  />
         </td> </tr><tr>   <td class="isiformin">
	       <div align="right">
	         <input type="submit" value="Edit" class="tombol" />
              </div></td>
        <td class="isiformin">&nbsp;</td>
        <td class="isiformin">
		<input type="button" value="Back" class="tombol" onClick="self.history.back()" />        </td></tr>           
          <?php
}
?></table>
</form>
</body>
</html>
