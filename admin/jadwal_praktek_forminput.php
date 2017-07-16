<link rel="stylesheet" href="tabel.css" type="text/css" />
<form action="jadwal_praktek_input.php" method="post"><div align="center">
     <table class="borderform" border="0" align="center">
    
     			<tr><th colspan="3" class="judul1">Form Input Jadwal Poliklinik</th></tr>
     			<tr><td class="isiformin">Kode Jadwal</td><td class="isiformin"><strong>:</strong></td>
	   <td class="isiformin"><input type="text" name="kode_jadwal" size="40%" maxlength="4" class="inputtextform1"></td></tr>
			<tr><td class="isiformin">Hari</td><td class="isiformin"><strong>:</strong></td>
<td><span class="isiformin">
			  <select name="hari" style="width:57%"  class="dropdown">
               
                <option value="Monday">Senin</option>
                <option value="Tuesday">Selasa</option>
                <option value="Wednesday">Rabu</option>
                <option value="Thursday">Kamis</option>
                <option value="Friday">Jum'at</option>
                <option value="Saturday">Sabtu</option>
              </select>
			</span></td>
	   </tr>
            <tr><td class="isiformin">Jam Mulai</td><td class="isiformin"><strong>:</strong></td>
       <td class="isiformin"><input type="time" name="jam_mulai" style="width:30%" class="inputtextform1" size="40%"></td></tr>
			
			<tr><td class="isiformin">Jam Selesai</td><td class="isiformin"><strong>:</strong></td>
	   <td class="isiformin"><input type="time" name="jam_selesai" style="width:30%" class="inputtextform1" size="40%"></td></tr>
			<tr>
			  <td class="isiformin">Kode Dokter</td>
			  <td class="isiformin"><strong>:</strong></td>
<td class="isiformin"><select name="kode_dokter" style="width:60%"  class="dropdown">
                  <?php
 include ("koneksi.php");
$sql="select * from dokter ";
$query=mysql_query($sql) or die ("Query Salah");
?>
                  <?php
while($row=mysql_fetch_array($query)){
?>
                  <option value="<?php echo $row['kode_dokter']?>"><?php echo $row['nama_dokter']?></option>
                  <?php
}
?>
              </select></td>
	   </tr>
            <tr>
			  <td class="isiformin">&nbsp;</td>
			  <td class="isiformin">&nbsp;</td>
			  <td class="isiformin">&nbsp;</td>
	   </tr>
            <tr><td colspan="3" class="isiformin" align="center">
            <input type="submit" value="SIMPAN" class="tombol" /> &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
            <input type="reset" value="HAPUS" class="tombol" />              
            </td>
            	</tr>
</table>
</div>
</form>
