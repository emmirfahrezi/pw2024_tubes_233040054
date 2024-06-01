<?php
include '../function/functions.php';

// membuat koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040054');


$query = "SELECT motor.model, motor.merek, motor.harga, `order`.tanggal_order, user.username 
          FROM motor 
          JOIN `order` ON motor.id_motor = `order`.id_motor
          JOIN user ON `order`.id_user = user.id_user";
$result = mysqli_query($conn, $query);

// konversi hasil query ke dalam array asosiatif
$ambildata = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>order monav classic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>ORDER</h1>


        <a class="btn btn-danger" href="../admin/index.php" role="button">kembali</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">model</th>
                    <th scope="col">merek</th>
                    <th scope="col">harga</th>
                    <th scope="col">tanggal order</th>
                    <th scope="col">costumer</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($ambildata as $ad) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $ad['model']; ?></td>
                        <td><?= $ad['merek']; ?></td>
                        <td><?= $ad['harga']; ?></td>
                        <td><?= $ad['tanggal_order']; ?></td>
                        <td><?= $ad['username']; ?></td>
                        <!-- sisanya kode Anda -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>