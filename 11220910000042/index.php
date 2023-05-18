<?php include "konek.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Program awal</title>
</head>
<body>
    <div id="loadingpage" style="height:100%;width:100%;position:fixed;left:0;top:0;background:#0d1116;z-index:10;cursor:wait;">
        <center>
            <pre id="loading_el" style="color: white;font-size:0.5em;top: 5em;position:relative;"></pre>
        </center>
    </div>
    <div id="container">
        <div id="header">
            <h1>PERTEMUAN I</h1>
        </div>

        <div style="display: flex;">
        <div id="sidebar">
            <h3>navigasi</h3>
            <ul id="navmenu">
                <li><a href="?" <?php if (!isset($_GET['module'])) echo 'class="selected"'; ?>>Register</a></li>
                <li><a href="?module=galeri" <?php if (isset($_GET['module'])) if ($_GET['module'] == "galeri") echo 'class="selected"'; ?>>Cari Data</a></li>
                <li><a href="?module=jadwal" <?php if (isset($_GET['module'])) if ($_GET['module'] == "jadwal" || $_GET['module'] == "edit") echo 'class="selected"'; ?>>Pusat Data</a></li>
            </ul>
        </div>

        <div id="page">
            <?php
            if (isset($_GET['module']))
                include("konten/$_GET[module].php");
            else
                include("home.php");
            ?>
        </div>
        </div>

        <div id="clear"></div>

        <div id="footer">
            <p>&copy; 2010</p>
        </div>

    </div>
    <script type="module" src="script/app.js"></script>
</body>
</html>