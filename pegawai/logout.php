<?php
session_start();
unset($_SESSION['username']);
echo "<script>alert('Anda Telah Berhasil Logout');</script>";
echo '<script type="text/javascript">document.location=\'index.php\';</script>';
?>
