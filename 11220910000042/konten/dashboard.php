<?php

session_start();
if(!isset($_SESSION['user']))
    header("location: index.php");

?>
selamat datang <strong><?php echo $_SESSION['user'] ?></strong><br>
click untuk <a href="index.php?module=logout">keluar</a>