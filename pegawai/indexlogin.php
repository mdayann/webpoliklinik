<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.php'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");
$query = mysql_query("SELECT * FROM pegawai WHERE username = '$username'");
$hasil = mysql_fetch_array($query);

//include "config/fungsi_kalender.php";


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dayan's Clinic | Enam Sembilan</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>

<div id="wrapper">


      <div id="header">
    
    </div> <!-- header -->


    

	<div id="menu">
    
    	 <div id="menu">
    
   				 <ul id="menu-utama">
				  <li><a href="indexlogin.php">Home</a></li>
<li><a href="indexlogin.php?p=pasien_forminput">Input Pasien</a></li>
<li><a href="indexlogin.php?p=pasien_tampildata">Data Pasien</a></li>
<li><a href="indexlogin.php?p=pendaftaran_forminput">Input Pendaftaran</a></li>
<li><a href="indexlogin.php?p=pendaftaran_tampildata">Data Pendaftaran</a></li>
<li><a href="indexlogin.php?p=pemeriksaan_tampildata">Cetak Pembayaran</a></li>
<li><a href="logout.php">Logout</a></li>
				</ul>
				
    
    
    </div>
    
    
    </div> <!-- menu-->
    
    
    
  
    
    
    
    
    
    	
        
        
        
        
        <div id="kananlogin">
 
        <?php
$page = '';
if(isset($_GET['p'])){
    $page = $_GET['p'];
}
$file = "$page.php";


if(!file_exists($file) || empty($page)){ 
   echo "<center>";
   echo "<img src='gambar/slide.gif' alt='slideshow' width='50%' height='250px;'  style='border:1px;border-radius:10px;' />";
   include ("tentang.php");
  }else{ 
  echo "<iframe align=middle width='100%' height='100%' src=$file frameborder=0></iframe> "; 
  echo "</center>";
}
?>
        
        </div> <!--kanan-->
        
        



	<div id="footer">
    </div> <!-- footer -->



</div> <!-- wrapper-->



</body>
</html>