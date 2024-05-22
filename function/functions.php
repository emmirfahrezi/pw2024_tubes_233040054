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

    //jika hasilnya hanya satu\
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

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

    // upload gambar
    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO motor
                VALUES
                (null, '$model', '$merek', '$harga', '$foto');

                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar di upload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
                </script>";
        return false;
    }

    // ukuran terlalu besar
    if ($ukuranFile > 5000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
                </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'galery/' . $namaFileBaru);
    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data['gambarLama']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        $foto = $gambarLama;
    } else {
        $foto = upload();
    }

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


// cari data

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM motor
               WHERE 
               model LIKE '%$keyword%' OR
               merek LIKE '%$keyword%' OR
               harga LIKE '%$keyword%' OR
               foto LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// login
function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu ussername
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

        if (password_verify($password, $user['password'])) {

            // Set the session variables
            $_SESSION['login'] = true;
            $_SESSION['role'] = $user['role'];

            // Redirect based on the user role
            if ($user['role'] == 'admin') {
                header('Location: ../admin/index.php');
            } else {
                header('Location: ../user/index.php');
            }
            exit;
        }
    }
    return [
        'error' => true,
        'pesan' => 'username / password salah!'
    ];
}


// registrasi
function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong

    if (empty($username) || empty($password2) || empty($password2)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai bang!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika password < 10 digit
    if (strlen($password1) < 3) {
        echo "<script>
                alert('password kependekan bang, buat 3 lebih digit!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}