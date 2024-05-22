<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit;
}


include '../function/functions.php';

if (isset($_POST['tambah'])) {



    // cek apakah data berhasil di tambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah data motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">tambah data motor</h1>

    <form action="" method="post" enctype="multipart/form-data" class="mx-auto" style="width: 600px;">
        <div class="mb-3">
            <label for="model" class="form-label">model : </label>
            <input type="text" name="model" class="form-control" id="model" required>
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">merek : </label>
            <input type="text" name="merek" class="form-control" id="merek" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga : </label>
            <input type="text" name="harga" class="form-control" id="harga" required>
        </div>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">foto : </label>
            <input type="file" name="foto" class="form-control" id="foto" required>
        </div>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>