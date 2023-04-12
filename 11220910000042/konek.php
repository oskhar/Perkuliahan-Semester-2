<?php

try {
    $conn = mysqli_connect("localhost", "root", "tesdoang", "semester_2");
    
} catch (\Throwable $er) {
    echo (" (namafile.php) pesan: " . $er);

}

?>