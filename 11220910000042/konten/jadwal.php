<?php $result = mysqli_query($conn, "SELECT * FROM register") ?>
            <h2 style="color:#003366;">Daftar Member</h2><br>
            <table width="810" border="1" style="text-align: center">
                <tr>
                    <td bgcolor="#99ccff">No</td>
                    <td bgcolor="#99ccff">Nama Depan</td>
                    <td bgcolor="#99ccff">Nama Belakang</td>
                    <td bgcolor="#99ccff">Username</td>
                    <td bgcolor="#99ccff">Password</td>
                    <td bgcolor="#99ccff">Usia</td>
                    <td bgcolor="#99ccff">JK</td>
                    <td bgcolor="#99ccff">TTL</td>
                    <td bgcolor="#99ccff">Email</td>
                    <td bgcolor="#99ccff">No Tel</td>
                    <td colspan="2" bgcolor="#99ccff">Aksi</td>
                </tr>
                <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['namadep'] ?></td>
                    <td><?php echo $data['namabel'] ?></td>
                    <td><?php echo $data['username'] ?></td>
                    <td><?php echo $data['password'] ?></td>
                    <td><?php echo $data['usia'] ?></td>
                    <td><?php echo $data['jk'] ?></td>
                    <td><?php echo $data['ttl'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['notel'] ?></td>
                    <td><a href="?module=edit&id=<?php echo $data['id'] ?>">Edit</a></td><td><a href="?module=hapus&id=<?php echo $data['id'] ?>">Hapus</a></td>
                </tr>
                <?php endwhile; ?>
            </table>
            <br>