<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<div align="center">
<form action="pasien_input.php" method="post">
<table align="center" class="borderform">
    <tr>
      <th colspan="3" class="judul1">Form Input Pasien
</th>
    	</tr>
	<tr>
    	<td width="129" class="isiformin"><em>Nama Pasien </em></td>
	  		<td width="6" class="isiformin"><strong>:</strong></td>
    <td width="245" class="isiformin"><input name="nama_pasien" type="text" class="inputtextform1" size="40" maxlength="50"/></td></tr>
    <tr>
    	<td class="isiformin"><em>Alamat Pasien </em></td>
      		<td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><input name="alamat_pasien" type="text" class="inputtextform1" size="40" maxlength="50" /></td></tr>
    <tr>
    	<td class="isiformin"><em>Tanggal Lahir Pasien </em></td>
      		<td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><input name="tanggal_lahir_pasien" type="Date" class="inputtextform1" size="40" style="width:48.5%"/></td></tr>
    <tr>
    	<td class="isiformin"><em>Telepon Pasien </em></td>
      		<td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><input name="telp" type="text" size="40" class="inputtextform1" maxlength="12" /></td></tr>
    <tr>
      <td class="isiformin"><em>Jenis kelamin</em></td>
      	<td class="isiformin"><strong>:</strong></td>
      <td class="isiformin"><em>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"/> Laki-laki 
		<input type="radio" name="jenis_kelamin" value="Perempuan"/>perempuan</em></td></tr>
	<tr>
	  <td colspan="3" class="isiformin"><div align="center">
	    <input type="submit" class="tombol" value="SIMPAN">
      </div></td>
    </tr>
</table>
</form>

</body>
</html>
</div>