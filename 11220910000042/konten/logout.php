<?php

session_start();
unset($_SESSION['user']);
unset($_SESSION['pass']);
session_destroy();
echo "<script>alert('Anda telah logout');window.location.href='index.php';</script>";

?>