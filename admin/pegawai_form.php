<link rel="stylesheet" href="tabel.css" type="text/css" />
<div align="center">
<form action="pegawai_input.php" method="post">
<table width="77%" border="0" align="center"  class="borderform" >
 
    <tr>
     	  <th class="judul1"  colspan="3" style="font-size: 24px">Form Input Pegawai</th></tr>
     	<tr><td width="378" class="isiformin" style="font-size: 18px">NIP</td>
     	  <td width="35" class="isiformin"><strong>:</strong></td>
      <td width="806" class="isiformin"><input type="text" name="nip" size="40" maxlength="20" class="inputtextform1" /></td></tr>
     	<tr><td class="isiformin" style="font-size: 18px">Nama Pegawai</td>
     	  <td class="isiformin"><strong>:</strong></td>
   	    <td class="isiformin"><input type="text" name="nama_pegawai" size="40" maxlength="25" class="inputtextform1" /></td></tr>
     	<tr><td class="isiformin" style="font-size: 18px">Username</td>
     	  <td class="isiformin"><strong>:</strong></td>
   	    <td class="isiformin"><input type="text" name="username" size="40" maxlength="20" class="inputtextform1" /></td></tr>
     	<tr><td class="isiformin" style="font-size: 18px">Password</td>
     	  <td class="isiformin"><strong>:</strong></td>
   	    <td class="isiformin"><input type="password" name="password" size="40" maxlength="8" class="inputtextform1" /></td></tr>
		<tr><td class="isiformin" style="font-size: 18px">Alamat Pegawai</td>
		  <td class="isiformin"><strong>:</strong></td>
	    <td class="isiformin"><input type="text" name="alamat_pegawai" size="40" maxlength="50" class="inputtextform1" /></td></tr>
		<tr><td class="isiformin" style="font-size: 18px">Telepon pegawai</td>
		  <td class="isiformin"><strong>:</strong></td>
	    <td class="isiformin"><input type="text" name="telepon_pegawai" size="40" maxlength="13" class="inputtextform1" /></td></tr>
		<tr>
		  <td class="isiformin" style="font-size: 18px">Jenis kelamin</td>
		  <td class="isiformin"><strong>:</strong></td>
		  <td class="isiformin"><input type="radio" name="jeniskelamin_pegawai" value="Laki-laki"/>Laki-laki 
								<input type="radio" name="jeniskelamin_pegawai" value="perempuan"/>Perempuan</td></tr>
		<tr><td class="isiformin" colspan="3"><div align="center">
		  <input type="submit" value="SIMPAN" class="tombol">	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	  
		  <input type="reset" value="BATAL" class="tombol">
		  </div></td></tr>
 </table>
</form>
</div>