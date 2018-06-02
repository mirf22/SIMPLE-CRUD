<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
    header('Location: listsiswa.php');
}

//ambil id dari query string
$no = $_GET['no'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE no=$no";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <header>
        <h3>Formulir Edit User</h3>
    </header>

    <form action="edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="no" value="<?php echo $siswa['no'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="id_user">ID: </label>
            <textarea name="id_user"><?php echo $siswa['id_user'] ?></textarea>
        </p>
        <p>
            <select name="status">
                <option <?php echo ($status == 'Dosen') ? "selected": "" ?>>Dosen</option>
                <option <?php echo ($status == 'Mahasiswa') ? "selected": "" ?>>Mahasiswa</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>