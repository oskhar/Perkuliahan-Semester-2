<?php

try {

    $username = '';
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
    }
    $result = mysqli_query($conn, "SELECT * FROM register WHERE `username` like '$username%' or `username` like '%$username%' or `username` like '%$username'");
    
} catch (\Throwable $er) {
    echo (" (galeri.php) pesan: " . $er);

}

?>

<style>
    #data_center {
        height: 500;
        width: 810;
        grid-template-columns: 31% 31% 31%;
        column-gap: 3%;
        row-gap: 20px;
        display: grid;
    }
    #data_center button {
        width: 80px;
        background: #99ccff;
        border: 1px solid lightgray;
        border-radius:3px;
    }
    #data_center a {
        text-decoration: none;
        color: black;
    }
    #data_user {
        height: 280px;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        display: grid;
        grid-template-rows: 2em auto 2em 2em;
        row-gap: 20px;
        padding: 20px;
        overflow: hidden; 
    }
    #data_rincian {
        grid-template-columns: auto auto;
        column-gap: 10px;
        display: grid;
    }
    sup {
        color: gray;
    }
</style>

Cari member
<form action="" method="get">
    <input type="hidden" name="module" value="galeri">
    <input type="text" name="username" id="username_search" onkeyup="window.location.href='?module=galeri&username=' + this.value;" value="<?php echo $username ?>" style="word-break: break-all;" autofocus="autofocus" >
    <input type="submit" value="cari">
</form>
<br>

<div id="data_center">
    <?php while($data = mysqli_fetch_assoc($result)): ?>
        <div id="data_user">
            <b style="text-align:center;color:#003366;"><?php echo $data['username'] ?></b>
            <div id="data_rincian">
                <div>
                    <p> <?php echo $data['namadep'] ?><sup>[namadep]</sup></p>
                    <p> <?php echo $data['namabel'] ?><sup>[namabel]</sup></p>
                    <p> <?php echo $data['password'] ?><sup>[password]</sup></p>
                    <p><?php echo $data['usia'] ?> tahun<sup>[umur]</sup></p>
                </div>
                <div>
                    <p> <?php echo $data['jk'] ?><sup>[jk]</sup></p>
                    <p> <?php echo $data['ttl'] ?><sup>[ttl]</sup></p>
                    <p> <?php echo $data['notel'] ?><sup>[tel]</sup></p>
                </div>
            </div>
            <p><?php echo $data['email'] ?></p>
            <div>
                <button><a href="?module=edit&id=<?php echo $data['id'] ?>">Edit</a></button>
                <button><a href="?module=hapus&id=<?php echo $data['id'] ?>">Hapus</a></button>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<br>
<script>
function mulai_search(el) {

    var len = el.value.length;

    if (el.setSelectionRange) {

        el.focus();
        el.setSelectionRange(len, len);

    } else if (el.createTextRange) {

        var t = el.createTextRange();
        t.collapse(true);
        t.moveEnd('character', len);
        t.moveStart('character', len);
        t.select();

    }
}
mulai_search(document.getElementById("username_search"));
</script>