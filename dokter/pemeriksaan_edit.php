<link rel="stylesheet" href="tabel.css" type="text/css" />
<div align="center">
<form action="pemeriksaan_editproses.php" method="post">
<?php
	 include "koneksi.php";
	 $sql="select * from pemeriksaan where no_pemeriksaan='$_REQUEST[no_pemeriksaan]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>	
  <table class="borderform"  border="0" class="borderform">
    <tr>
      <td class="judul1" colspan="3" align="right"><div align="center">FORM EDIT PEMERIKSAAN</div></td>
    </tr>
    <tr>
          <td class="isiformin" width="165" align="right">  <div align="left">No Pendaftaran</div></td> 
          <td class="isiformin" width="10"><strong>:</strong></td>
          <td class="isiformin" width="272"><input class="inputtextform1" type="text" name="no_pendaftaran" value="<?php echo $data['no_pendaftaran']?>"  size="40" maxlength="80"  />
      <input type="hidden" name="no_pemeriksaan" size="40" value=<?php echo "'$data[no_pemeriksaan]'";?> class="inputtextform1" />      </td> </tr><tr>
			<td class="isiformin" align="right"><div align="left">Keluhan</div></td>
			<td class="isiformin"><strong>:</strong></td>
			<td class="isiformin"><input class="inputtextform1" type="text" name="keluhan" value="<?php echo $data['keluhan']?>"  size="40" maxlength="225"  />		    </td>
          </tr>
			<tr><td class="isiformin" align="right"><div align="left">Diagnosa</div></td>
			  <td class="isiformin"> <strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="diagnosa" value="<?php echo $data['diagnosa']?>"  size="40" maxlength="50" /></td></tr>
              <tr><td class="isiformin" align="right"><div align="left">Perawatan</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="perawatan" value="<?php echo $data['perawatan']?>"  size="40" maxlength="100" /></td></tr>
               <tr><td class="isiformin" align="right"><div align="left">Tindakan</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="tindakan" value="<?php echo $data['tindakan']?>"  size="40" maxlength="100" /></td></tr>
              <tr><td class="isiformin" align="right"><div align="left">Berat Badan</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="berat_badan" value="<?php echo $data['berat_badan']?>"  size="40" maxlength="3" /></td></tr>
              <tr><td class="isiformin" align="right"><div align="left">Tensi Diastolik</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="tensi_diastolik" value="<?php echo $data['tensi_diastolik']?>"  size="40" maxlength="3" /></td></tr>
              <tr><td class="isiformin" align="right"><div align="left">Tensi Sistolik</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="tensi_sistolik" value="<?php echo $data['tensi_sistolik']?>"  size="40" maxlength="3" /></td></tr>
              <tr><td class="isiformin" align="right"><div align="left">No Resep</div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input class="inputtextform1" type="text" name="no_resep" value="<?php echo $data['no_resep']?>"  size="40" maxlength="15" /></td></tr>
      <tr>   <td class="isiformin">
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
</div>
