<?php
$koneksi = mysql_connect("localhost","root","") or die("MySQL  :". mysql_error());
	mysql_select_db("poliklinik", $koneksi)or die(mysql_error());
	
	?>