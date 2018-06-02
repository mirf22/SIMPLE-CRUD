<!DOCTYPE html>
<html>
<head>
    <title>Tambah Baru</title>
</head>

<body>
    <header>
        <h3>Tambah Data User Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="id_user">ID: </label>
            <input type="text" name="id_user"></textarea>
        </p>
        
        
         <p>
            <label for="status">Status: </label>
            <select name="status">
                <option>Dosen</option>
                <option>Mahasiswa</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>