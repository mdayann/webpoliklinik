<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<form action="dokter_editproses.php" method="post">
<?php
	 include "koneksi.php";
	 $sql="select * from dokter where kode_dokter='$_REQUEST[kode_dokter]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>	
  <table class="borderform" width="456" border="0" align="center">
    <tr>
      <td colspan="3" class="judul1" align="right"><div align="center">FORM EDIT DOKTER</div></td>
    </tr>
    <tr>
          <td class="isiformin" width="165" align="right">  <div align="left">Nama Dokter</div></td> 
          <td class="isiformin" width="10"><strong>:</strong></td>
          <td class="isiformin" width="272"><input type="text" class="inputtextform1" name="nama_dokter" value="<?php echo $data['nama_dokter']?>"  size="40" maxlength="30"  />
      <input type="hidden" name="kode_dokter" size="40" value=<?php echo "'$data[kode_dokter]'";?> class="inputtext" />      </td> </tr><tr>
			<td class="isiformin" align="right"><div align="left">Alamat Dokter</div></td>
			<td class="isiformin"><strong>:</strong></td>
			<td class="isiformin"><input type="text" name="alamat_dokter" class="inputtextform1" value="<?php echo $data['alamat_dokter']?>"  size="40" maxlength="25"  />		    </td>
          </tr>
			<tr><td align="right" class="isiformin"><div align="left">No Hp</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input type="text" name="telepon_dokter" class="inputtextform1" value="<?php echo $data['telepon_dokter']?>"  size="40" maxlength="13" /></td> </tr>
              <tr>
          <td width="165" align="right" class="isiformin">  <div align="left">Username</div></td> 
          <td width="10" class="isiformin"><strong>:</strong></td>
          <td width="272" class="isiformin"><input type="text" name="username" class="inputtextform1" value="<?php echo $data['username']?>"  size="40" maxlength="30"  />   </td> </tr>
          <tr>
          <td class="isiformin" width="165" align="right">  <div align="left">Password</div></td> 
          <td width="10" class="isiformin"><strong>:</strong></td>
          <td width="272" class="isiformin"><input type="text" class="inputtextform1" name="password" value="<?php echo $data['password']?>"  size="40" maxlength="30"  />   </td> </tr>
      <tr>   <td class="isiformin">
	    <div align="right">
	      <input type="submit" value="Edit" class="tombol" />
        </div></td>
        <td class="isiformin">&nbsp;</td>
        <td class="isiformin">
		<input type="button" class="tombol" value="back" onClick="self.history.back()" />        </td></tr>           
          <?php
}
?></table>
</form>
</body>
</html>
