<?php

try {

    echo $_POST['email'];
    include "konek.php";
    $query = "INSERT INTO register (`id`, `namadep`, `namabel`, `username`, `password`, `usia`, `jk`, `ttl`, `email`, `notel`) VALUES (0, '$_POST[namadep]', '$_POST[namabel]', '$_POST[username]', '$_POST[password]', '$_POST[usia]', '$_POST[jk]', '$_POST[ttl]', '$_POST[email]', '$_POST[notel]')";

    if(!mysqli_query($conn, $query))
        die("error");

    echo "<script>alert('Selamat, Anda telah mendaftar');window.location.href='index.php';</script>";
    
} catch (\Throwable $er) {
    echo (" (register.php) pesan: " . $er);

}

?>