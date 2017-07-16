<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT</title>
<link rel="stylesheet" href="tabel.css" type="text/css" />
</head>
<body>
<?php
	 include "koneksi.php";
	 $sql="select * from jadwal_praktek where kode_jadwal='$_REQUEST[kode_jadwal]'";
	 $query=mysql_query($sql);
	 while($data=mysql_fetch_array($query))
	 {
	 ?>			
 <form name="form2" method="POST" action="jadwal_praktek_update.php">
  <table class="borderform" width="378" border="0" align="center">
  <tr>
    <td colspan="3" align="center" class="judul1"><div align="center"></div>FORM EDIT JADWAL PRAKTEK</td>
  </tr>
  <tr>
          <td align="right" class="isiformin">  <div align="left">Kode Dokter</div></td> 
          <td class="isiformin"><strong>:</strong></td>
<td class="isiformin"><input type="text" class="inputtextform1" style="width:50%" name="kode_dokter" value="<?php echo $data['kode_dokter']?>" id="kode_dokter" >
            <input type="hidden" class="inputtextform1" name="kode_jadwal" size="40" value=<?php echo "'$data[kode_jadwal]'";?>/></td> </tr><tr>
			<td align="right" class="isiformin"><div align="left">Hari  </div></td>
			<td class="isiformin"><strong>:            
			</strong>
			<td class="isiformin"><select style="width:50%" name="hari" class="dropdown">
            <?php
            	if($data['hari']=="Monday")
				{ $hari="Senin"; }
				elseif($data['hari']=="Tuesday")
				{ $hari="Selasa"; }
				elseif($data['hari']=="Wednesday")
				{ $hari="Rabu"; }
				elseif($data['hari']=="Thursday")
				{ $hari="Kamis"; }
				elseif($data['hari']=="Friday")
				{ $hari="Jumat"; }
				elseif($data['hari']=="Saturday")
				{ $hari="Sabtu"; }
				elseif($data['hari']=="Sunday")
				{ $hari="Minggu"; }
				?>
              <option value="<?php echo $data['hari']?>"><?php echo "$hari";?></option>
      
             <option value="Monday">Senin</option>
                <option value="Tuesday">Selasa</option>
                <option value="Wednesday">Rabu</option>
                <option value="Thursday">Kamis</option>
                <option value="Friday">Jum'at</option>
                <option value="Saturday">Sabtu</option>
              <?php

?>
            </select>
            <tr>   <td align="right" class="isiformin"><div align="left">Jam Mulai  </div></td>
              <td class="isiformin"><strong>:</strong></td>
    <td class="isiformin"><input type="time" name="jam_mulai" style="width:50%" class="inputtextform1"  value="<?php echo $data['jam_mulai']?>" id="jam_mulai"></td></tr>
			<tr><td align="right" class="isiformin"><div align="left">Jam Selesai </div></td>
			  <td class="isiformin"><strong>:</strong></td>
			  <td class="isiformin"><input type="time" class="inputtextform1" style="width:50%" name="jam_selesai"  value="<?php echo $data['jam_selesai']?>" id="jam_selesai"></td>
      </tr><tr>   <td>
	    <div align="right" class="isiformin">
	      <input type="submit" class="tombol" value="Edit" />
        </div></td>
        <td>&nbsp;</td>
        <td>
		<input type="button" class="tombol" value="Back" onClick="self.history.back()" />        </td></tr>           
          </table>
</form>
<?php
}
?>
</body>
</html>