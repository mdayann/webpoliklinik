<html>
<head>
<title>Form Input Admin</title>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<center>
  <form action="admin_input.php" method="post">
		<table border="0" class="borderform">
			<tr >
              <th class="judul1"  colspan="3" style="font-size: 24px">FORM INPUT ADMIN</th>
		  </tr>
			<tr>
			  <td width="26%" class="isiformin style1">Username admin</td>
			  <td width="11%" class="isiformin"><strong>:</strong></td>
	      <td width="63%" class="isiformin"><input type="text" name="username" size="40" maxlength="20" class="inputtextform1"></td></tr>
			<tr>
			  <td class="isiformin style1">Password</td>
			  <td class="isiformin"><strong>:</strong></td>
		    <td class="isiformin"><input type="password" name="password" size="40" maxlength="20" class="inputtextform1"></td></tr>
			<tr><td colspan="3" class="isiformin">
			  <div align="center">
			    <input type="submit" value="SIMPAN" class="tombol">
		      </div></td>
		    </tr>
		</table>
  </form>
</center>
</body>
</html>