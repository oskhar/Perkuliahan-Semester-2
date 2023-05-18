<?php

$result = mysqli_query($conn, "SELECT * FROM register WHERE `id`='$_GET[id]'");
$data = mysqli_fetch_array($result);

?>
<form action="subedit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    <p>&nbsp;</p>
    <div align="center" class="style1">
        <h2 style="color:#003366;">REGISTER</h2>
    </div>
    <table width="496" border="0" align="center">
        <tr>
            <td width="163">Nama Depan :</td>
            <td width="317"><input type="text" name="namadep" value="<?php echo $data['namadep'] ?>" required></td>
        </tr>
        <tr>
            <td>Nama Belakang :</td>
            <td><input type="text" name="namabel" value="<?php echo $data['namabel'] ?>" required></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="username" value="<?php echo $data['username'] ?>" required></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="password" value="<?php echo $data['password'] ?>" required></td>
        </tr>
        <tr>
            <td>Usia :</td>
            <td><input type="text" name="usia" value="<?php echo $data['usia'] ?>" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td><input type="text" name="jk" value="<?php echo $data['jk'] ?>" required></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir :</td>
            <td><input type="text" name="ttl" value="<?php echo $data['ttl'] ?>" required></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email" value="<?php echo $data['email'] ?>" required></td>
        </tr>
        <tr>
            <td>Nomor Telephone :</td>
            <td><input type="text" name="notel" value="<?php echo $data['notel'] ?>" required></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Tetapkan Perubahan" style="width: 160px; background: #99ccff; border: 1px solid gray; border-radius:3px;"></td>
        </tr>
    </table>
</form>