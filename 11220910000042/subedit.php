<?php

try {

    include "konek.php";
    $query = "UPDATE register SET `namadep`='$_POST[namadep]', `namabel`='$_POST[namabel]', `username`='$_POST[username]', `password`='$_POST[password]', `usia`='$_POST[usia]', `jk`='$_POST[jk]', `ttl`='$_POST[ttl]', `email`='$_POST[email]', `notel`='$_POST[notel]' WHERE `id`=$_POST[id]";

    if(!mysqli_query($conn, $query))
        die("error");

    echo "<script>alert('Selamat, Data telah berhasil diubah');window.location.href='index.php?module=jadwal';</script>";
    
} catch (\Throwable $er) {
    echo (" (register.php) pesan: " . $er);

}

?>