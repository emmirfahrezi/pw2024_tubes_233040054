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
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}


// DELETE DATA

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM motor WHERE id_motor = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


// UPDATE DATA
function ubah($data)
{
    $conn = koneksi();

    $id_motor = htmlspecialchars($data['id_motor']);
    $model = htmlspecialchars($data['model']);
    $merek = htmlspecialchars($data['merek']);
    $harga = htmlspecialchars($data['harga']);
    $foto = htmlspecialchars($data['foto']);

    $query = "UPDATE motor SET 
                model = '$model',
                merek = '$merek',
                harga = '$harga',
                foto = '$foto'
                WHERE id_motor = $id_motor
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}
