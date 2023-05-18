<?php

try {

    include "konek.php";
    $query = "DELETE FROM register WHERE `id`=$_GET[id]";

    if(!mysqli_query($conn, $query))
        die("error");

    echo "<script>alert('Data telah berhasil dihapus');window.location.href='index.php?module=jadwal';</script>";
    
} catch (\Throwable $er) {
    echo (" (register.php) pesan: " . $er);

}

?>