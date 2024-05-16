<?php

function koneksi()
{
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040054')  or die('koneksi ke DB gagal');
    return $db;
}
function query($sql)
{
    // koneksi ke database
    $conn = koneksi();
    // lakukan query untuk mengambil data mahasiswa
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    // menyiapkan data mahasiswa (fetch)
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
