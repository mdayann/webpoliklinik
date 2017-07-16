<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<link rel="stylesheet" href="tabel.css" type="text/css" />
<body>
<div align="center">
<form action="pasien_edit_proses.php" method="post" >
  <table width="66%" border="0" class="borderform" align="center">
   <?php
$koneksi=mysql_connect("localhost","root","")or die("MySQL :". mysql_error());
mysql_select_db("poliklinik", $koneksi) or die(mysql_error());
$no_pasien=$_GET['no_pasien'];
$sql="select * from pasien where no_pasien='$no_pasien'";
$query=mysql_query($sql) or die ("Query Salah");
while ($data=mysql_fetch_array($query)){
?>
    <tr>
      <td colspan="3" align="right" class="judul1" ><div align="center">
        FORM EDIT PASIEN
        
      </div></td>
    </tr>
    <tr>
          <td width="309" align="right" class="isiformin">  <div align="left"><em>Nama Pasien </em></div></td> 
      <td width="5" class="isiformin"><em><strong>:</strong></em></td>
    <td width="486" class="isiformin"><em>
      <input type="text" name="nama_pasien" class="inputtextform1" value="<?php echo $data['nama_pasien']?>"  size="40" maxlength="80"  />
          <input type="hidden" name="no_pasien" size="40" value=<?php echo "'$data[no_pasien]'";?>  />      
          </em></td> </tr><tr>
			<td align="right" class="isiformin"><div align="left"><em>Alamat Pasien </em></div></td>
			<td class="isiformin"><em><strong>:</strong></em></td>
			<td class="isiformin"><input name="alamat_pasien" type="text" class="inputtextform1" value="<?php echo $data['alamat_pasien']?>"  size="40" maxlength="225"  />		    </td>
          </tr>
			<tr><td align="right" class="isiformin"><div align="left"><em>Tanggal Lahir Pasien </em></div></td>
			  <td class="isiformin"><em><strong>:</strong></em></td>
    <td class="isiformin"><input name="tanggal_lahir_pasien" type="date" class="inputtextform1" style="width:44%" value="<?php echo $data['tanggal_lahir_pasien']?>"  size="40" maxlength="50" /></td></tr>
              <tr>
                <td align="right" class="isiformin"><div align="left"><em>Telepon Pasien </em></div></td>
                <td class="isiformin"><em><strong>:</strong></em></td>
                <td class="isiformin"><input name="telp" type="text" class="inputtextform1" value="<?php echo $data['telp']?>"  size="40" maxlength="100" /></td>
              </tr>
              <tr><td align="right" class="isiformin"><div align="left"><em>Jenis kelamin</em></div></td>
			  <td class="isiformin"><em><strong>:</strong></em></td>
			  <td class="isiformin">
                <em>
                <input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($data['jenis_kelamin']=='Laki-laki'){echo 'checked';}?> />
                Laki-laki 
	            <input type="radio" name="jenis_kelamin" value="perempuan"  <?php if($data['jenis_kelamin']=='perempuan'){echo 'checked';}?> />
      Perempuan      </em></td></tr>
      
      <tr>   <td height="26" colspan="3"class="isiformin" >
	    <div align="center">
	      <input type="submit" value="EDIT" class="tombol"/>
	      <input type="button" value="BACK" onClick="self.history.back()"  class="tombol"/>        
        </div></td>
        </tr>           
          <?php
}
?></table>
</form>

</body>
</html>