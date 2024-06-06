<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit;
}

include '../function/functions.php';

$motor = query("SELECT * FROM motor");

// ambil id dari url
$id = $_GET['id'];

// query motor berdasarkan id
$mtr = query("SELECT * FROM motor WHERE id_motor=$id"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MONAV USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



    <!-- css -->

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;



        }




        .dashboard {
            background-color: grey;
            width: 100%;
        }

        /* RESPONSIVE */

        @media (max-width: 800px) {
            .card {
                width: 500px !important;

            }
        }

        @media (max-width: 600px) {
            .card {
                width: 400px !important;

            }
        }

        @media (max-width: 420px) {
            .card {
                width: 300px !important;

            }

            img {
                width: 200px !important;
                height: 100px !important;
            }

            p {
                font-size: 12px !important;
            }
        }
    </style>
</head>

<body>
    <!-- navbar start -->


    <section class="dashbor min-vh-100 pt-5 pb-5 dashboard">
        <h1 class="text-center " style="font-weight: bold;">DETAIL MOTOR</h1>



        <div class="container d-flex justify-content-center">

            <!-- button tambah motor -->



            <div class="row gy-4"">

                <div class=" col-md-4">
                <div class="card" style="width: 800px;">
                    <div class="d-flex justify-content-center mt-4 mb-2">
                        <img src=" ../admin/galery/<?= $mtr['foto'] ?>" class="card-img-top" alt="..." style="width: 350px; height:250px;  border-radius: 20px;">
                    </div>
                    <div class="card-body">

                        <h5 class="card-title" style="font-weight: bold;"><?= $mtr['model'] ?></h5>
                        <h6 class="card-title" style="font-weight: bold;"><?= $mtr['merek'] ?></h6>
                        <p class="card-title" style="font-size: 15px;"><?= $mtr['deskripsi'] ?></p>
                        <p class="card-text">
                            <td>Harga : RP. <?= number_format($mtr['harga'], 0, ',', '.') ?></td>
                        </p>

                    </div>
                    <a class="btn btn-warning" href="index.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg> </i>kembali</a>
                </div>



            </div>

        </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html