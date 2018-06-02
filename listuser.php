<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD</title>
</head>

<body>
    <header>
        <h3>List User</h3>
    </header>

    <nav>
        <a href="formdaftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            
            <th>ID</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            
            echo "<tr>";
            echo "<td>".$siswa['id_user']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['status']."</td>";
        
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id_user']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id_user']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>