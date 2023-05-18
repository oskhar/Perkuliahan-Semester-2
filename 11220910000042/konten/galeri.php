<?php

$username = '';
if (isset($_GET['username'])) {
    $username = $_GET['username'];
}
$result = mysqli_query($conn, "SELECT * FROM register WHERE `username` like $username");

?>

<style>
    #data_center {
        width: 810;
        grid-template-columns: auto auto auto;
    }
    #data_user {
        
    }
</style>

Cari member
<form action="" method="get">
    <input type="hidden" name="module" value="gambar">
    <input type="text" name="username">
    <input type="submit" value="cari">
</form>

<div id="data_center">
    <?php while($data = mysqli_fetch_assoc($result)): ?>
        <div id="data_user">
            <img src="" alt="">
        </div>
    <?php endwhile; ?>
</div>