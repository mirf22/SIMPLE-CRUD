<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $no = $_POST['no']
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    
    // buat query
    $sql = "INSERT INTO user (no, id_user, nama, status) VALUE ('$no', '$id_user', '$nama', '$status')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>