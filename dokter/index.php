<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:indexlogin.php'); }
require_once("koneksi.php");
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
					<li><a href="index.php">Home</a></li>
                <li><a href="index.php?p=kontak">Kontak</a></li>
                <li><a href="index.php?p=visimisi">Visi & Misi</a></li>
                <li><a href="index.php?p=tentang">Tentang</a></li>
				</ul>
				
    
    
    </div>
    
    
    </div> <!-- menu-->
    
    
    
  
    
    
    
    
    	<div id="kiri">
        
        <br>
        
        <center>
    <div class="log">
    Login Dokter
    </div>
    
   <div class="log2">
    <form action="login.php" method="post">
    <input class="inputlog" type="text" name="username" placeholder="Username" />
    <input class="inputlog" type="password" name="password" placeholder="Password" /> <br />
    
    <input class="tombol1" type="submit" value="Login" />
    </div>
    </form>
   
					
		
    
    
    </center>	
        
    	
        </div> <!-- kiri -->
        
        
        
        <div id="kanan">

        
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