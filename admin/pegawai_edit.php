<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>EDIT</title>
</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body >
<?php	
$koneksi = mysql_connect("localhost","root","") or die("MySQL  :". mysql_error());
	mysql_select_db("poliklinik", $koneksi)or die(mysql_error());
	
	$query = mysql_query("select * from pegawai where nip='$_REQUEST[nip]'") or die (mysql_error());
	while ($row=mysql_fetch_array($query)){ 		
                $nip=$row["0"];
                $nama_pegawai=$row["1"];
				$alamat_pegawai=$row["2"];
				$telepon_pegawai=$row["3"];	
				$jeniskelamin_pegawai=$row["4"];					
	}
?>		
 <form name="form2" method="POST" action="pegawai_edit_proses.php">
  <table  border="0" align="center" class="borderform">
  
  
 
   
<td colspan="3" class="judul1"> <div align="center">
  Form Edit Pegawai
        <input type="hidden" name="nip"  id="nip" value=<?php echo "$nip"; ?>>
</div></td> 
</tr>
<tr>
         
         
          <td width="186" align="right" class="isiformin">  <div align="left">Nama</div></td> 
          <td width="5" class="isiformin"><strong>:</strong></td>
   <td width="303" class="isiformin"><input type="text" name="nama_pegawai" class="inputtextform1" value=<?php echo "$nama_pegawai"; ?> id="nama_pegawai" ></td> </tr><tr>
		
          
            
     <td align="right" class="isiformin">  <div align="left">Alamat</div></td> 
          <td class="isiformin"><strong>:</strong></td>
   <td class="isiformin"><input type="text" name="alamat_pegawai" class="inputtextform1" value=<?php echo "$alamat_pegawai"; ?> id="alamat_pegawai" ></td> </tr><tr>         
            
            
              <td align="right" class="isiformin">  <div align="left">Telepon</div></td> 
          <td class="isiformin"><strong>:</strong></td>
   <td class="isiformin"><input type="text" name="telepon_pegawai" class="inputtextform1" value=<?php echo "$telepon_pegawai"; ?> id="telepon_pegawai" ></td> </tr><tr>
   
     <td align="right" class="isiformin">  <div align="left">Jenis Kelamin</div></td> 
          <td class="isiformin"><strong>:</strong></td>
   <td class="isiformin"><input type="radio" name="jeniskelamin_pegawai" value="Laki-laki"  <?php if($jeniskelamin_pegawai=='Laki-laki'){echo 'checked';}?> />Laki-laki 
					<input type="radio" name="jeniskelamin_pegawai" value="perempuan"  <?php if($jeniskelamin_pegawai=='perempuan'){echo 'checked';}?> />Perempuan</td></tr></td> </tr><tr>
   
            
   <td><div align="right">
     <input type="submit" value="Edit" class="tombol"/>
   </div></td>
        <td>&nbsp;</td>
        <td>
		<input type="button" value="back" onClick="self.history.back()" class="tombol" />        </td></tr>           
          </table>
</form>
</body>
</html>