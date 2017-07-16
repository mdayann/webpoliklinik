<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<form action="admin_edit_proses.php" method="post">
<?php
	 include "koneksi.php";
	 $sql="select * from admin where no='$_REQUEST[no]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>	
  <table class="borderform" width="456" border="0" align="center">
    <tr>
      <td colspan="3" class="judul1" align="right"><div align="center">FORM EDIT ADMIN</div></td>
    </tr>
    <tr>
          <td width="171" align="right" class="isiformin">  <div align="left">Username</div></td> 
      <td width="7" class="isiformin"><strong>:</strong></td>
      <td width="858" class="isiformin"><input type="text" name="username" class="inputtextform1" value="<?php echo $data['username']?>"  size="40" maxlength="30"  />
      <input type="hidden" name="no" size="40" value=<?php echo "'$data[no]'";?> class="inputtext" />      </td> </tr><tr>
			<td align="right" class="isiformin"><div align="left">Password</div></td>
			<td class="isiformin"><strong>:</strong></td>
			<td class="isiformin"><input type="password" class="inputtextform1" name="password" value="<?php echo $data['password']?>"  size="40" maxlength="25"  />		    </td>
          </tr><tr>   <td class="isiformin">
	        <div align="right">
	          <input type="submit" value="Edit" class="tombol" />
	        </div></td class="isiformin">
        <td class="isiformin">&nbsp;</td>
        <td class="isiformin">
		<input type="button" class="tombol" value="back" onClick="self.history.back()" />        </td></tr>           
          <?php
}
?></table>
</form>
</body>
</html>
