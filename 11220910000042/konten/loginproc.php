<?php

session_start();
include "konek.php";

$login = mysqli_query($conn, "SELECT * FROM register WHERE username='$_POST[user]' AND password='$_POST[pass]'");
$row = mysqli_num_rows($login);

if ($row > 0) {

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];
    echo "<script>alert('Anda berhasil login');window.location.href='index.php?module=dashboard';</script>";

} else {
    echo "<script>alert('Username atau Password salah!! anda gagal login');window.location.href='index.php';</script>";

}

?>