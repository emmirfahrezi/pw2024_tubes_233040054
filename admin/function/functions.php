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



// INSERT DATA

function tambah($data)
{

    $conn = koneksi();

    $model = htmlspecialchars($data['model']);
    $merek = htmlspecialchars($data['merek']);
    $harga = htmlspecialchars($data['harga']);
    $foto = htmlspecialchars($data['foto']);

    $query = "INSERT INTO motor
                VALUES
                (null, '$model', '$merek', '$harga', '$foto');

                ";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}
