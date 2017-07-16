<link rel="stylesheet" href="tabel.css" type="text/css" />

<?php
 include ("koneksi.php");
$id_dosis=$_GET['id_dosis'];
$sql="select * from dosis where id_dosis='$id_dosis'";
$query=mysql_query($sql) or die ("Query Salah");
if ($data=mysql_fetch_array($query)){
?>
<form action="dosis_edit_proses.php" method="post">

     <div align="center">
  <table width="456" class="borderform" border="0">
    <tr>
      <th class="judul1"  colspan="3" align="right"><div align="center">FORM EDIT DOSIS</div></th>
    </tr>
    <tr>
          <td class="isiformin" width="165" align="right">  <div align="left">Nama Dosis</div></td> 
          <td class="isiformin" width="10"><strong>:</strong></td>
          <td class="isiformin" width="272"><input class="inputtextform1"  name="nama_dosis" type="text" value="<?php echo $data['nama_dosis']?>" size="30" maxlength="30">
      <input type="hidden" name="id_dosis" value=<?php echo "'$data[id_dosis]'";?> />      </td> </tr>
      <tr>   <td class="isiformin">
	    <div align="right">
	      <input type="submit" value="Edit" class="tombol"  />
        </div></td>
        <td class="isiformin">&nbsp;</td>
        <td class="isiformin">
		<input type="button" class="tombol"  value="back" onClick="self.history.back()" />        </td></tr>           
          </table>
          <?php
		  }
		  ?>
</form>
</div>