<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit;
}


include '../function/functions.php';

// jika gada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}


// ambil query dari data
$id = $_GET['id'];

// query motor berdasarkan id
$mtr = query("SELECT * FROM motor WHERE id_motor = $id");
// cek apakah tombol sudah di tekan
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo "data gagal diubah!";
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ubah data motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        form {
            width: 100%;
            padding: 30px;
        }

        @media (max-width: 500px) {
            form {
                padding: 30px;
                width: 100% !important;

            }
        }
    </style>
</head>

<body>
    <h1 class="text-center">ubah data motor</h1>

    <form action="" method="post" enctype="multipart/form-data" class="mx-auto" style="width: 600px;">
        <input type="hidden" name="id_motor" value="<?= $mtr['id_motor']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mtr['foto']; ?>">
        <div class="mb-3">
            <label for="model" class="form-label">model : </label>
            <input type="text" name="model" class="form-control" id="model" required value="<?= $mtr['model']; ?>">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi : </label>
            <input type="text" name="deskripsi" class="form-control" maxlength="555" id="deskripsi" required value="<?= $mtr['deskripsi']; ?>">
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">merek : </label>
            <input type="text" name="merek" class="form-control" id="merek" required value="<?= $mtr['merek']; ?>">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga : </label>
            <input type="text" name="harga" class="form-control" id="harga" required value="<?= $mtr['harga']; ?>">
        </div>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">foto : </label>
            <img src="galery/<?= $mtr['foto']; ?>" width="50">
            <input type="file" name="foto" class="form-control" id="foto">
        </div>
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>