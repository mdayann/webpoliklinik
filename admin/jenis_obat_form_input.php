<html>
<head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<title>Form Input Jenis Obat</title>
</head>
<body>
<center>
  <form action="jenis_obat_input.php" method="post" >
		<table border="0" class="borderform">
			<tr>
			  <th class="judul1"  colspan="3" style="font-size: 24px">FORM INPUT JENIS OBAT</th>
		  </tr>
			<tr>
			  <td class="isiformin">Kode Obat</td>
			  <td class="isiformin"><strong>:</strong></td>
		  <td class="isiformin"><input type="text" name="kode_obat" size="50" maxlength="5" class="inputtextform1">	</td></tr>
			<tr>
			  <td class="isiformin">Nama Obat</td>
			  <td class="isiformin"><strong>:</strong></td>
		  <td class="isiformin"><input type="text" name="nama_obat" size="50" maxlength="20" class="inputtextform1"></td></tr>
			<tr>
			  <td class="isiformin">Merk</td>
			  <td class="isiformin"><strong>:</strong></td>
		  <td class="isiformin"><input type="text" name="merk" size="50" maxlength="9" class="inputtextform1"></td></tr>
              <tr>
                <td class="isiformin">Satuan</td>
			  <td class="isiformin"><strong>:</strong></td>
		  <td class="isiformin"><input type="text" name="satuan" size="50" maxlength="9" class="inputtextform1"></td></tr>
              <tr>
                <td class="isiformin">Harga Jual</td>
			  <td class="isiformin"><strong>:</strong></td>
		  <td class="isiformin"><input type="text" name="harga_jual" size="50" maxlength="9" class="inputtextform1"></td></tr>
			  <tr>
			    <td  class="isiformin">
			      <div align="right">
			        <input type="submit" value="SIMPAN" class="tombol">			      
			        
	              </div></td>
                <td></td>
                <td> <input type="reset" value="HAPUS" class="tombol"></td>
		  </tr>
		</table>
  </form>
</center>
</body>
</html>