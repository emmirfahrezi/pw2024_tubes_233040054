<?php
include 'function/functions.php';
$motor = query("SELECT * FROM motor");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
    $motor = cari($_POST['keyword']);
}
?>

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
            font-family: "Bebas Neue", sans-serif;
            margin: 0;
            padding: 0;



        }

        .navbar {
            position: fixed;
            background-color: #080808;
            padding: 10px 20px;

        }

        .navbar-brand span {
            color: #f0c929;
            font-family: "Pacifico", cursive;


        }

        .navbar-brand {

            font-family: "Pacifico", cursive;


        }


        .dashboard {
            background-color: grey;
            width: 100%;
        }

        .carousel-item {
            height: 100vh;
        }

        .carousel-inner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .carousel-caption h5 {
            color: white;
            font-size: 50px;
            text-transform: uppercase;

        }

        .carousel-caption p {
            color: white;
            width: 60%;
            margin: auto;
            font-size: 20px;
            line-height: 2;
        }



        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MONAV <span>CLASSIC</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">motor</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- navbar finish -->
    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="galery/slide6.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index: 2; position: absolute; top: 50%; bottom:-50%">
                        <h5>WELCOME TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="galery/slide9.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index: 2;  position: absolute; top: 50%; bottom:-50%">
                        <h5>WELCOME TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index: 2;  position: absolute; top: 50%; bottom:-50%">
                        <h5>WELCOME TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dashbor min-vh-100 pt-5 pb-5 dashboard">
        <h1 class="text-center ">PILIH MOTOR FAVORITE ANDA</h1>



        <div class="container pt-5 ">

            <!-- button tambah motor -->
            <a class="btn btn-primary mb-2" href="tambah_motor.php" role="button">TAMBAH MOTOR</a>

            <!-- form pencarian -->
            <form class="d-flex mb-2" role="search" action="" method="post" style="width:40%;">
                <input class="form-control me-2" type="search" aria-label="search" name="keyword" size="40" placeholder="masukan keyword pencarian" autocomplete="off" autofocus>
                <button class="btn btn-primary" type="submit" name="cari">Cari</button>
            </form>


            <div class="row gy-4 ">

                <?php if (empty($motor)) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">

                            <div class="card-body bg-danger text-center">
                                <h5 class="card-title">DATA TIDAK DI TEMUKAN</h5>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php $i = 1;
                foreach ($motor as $mtr) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="galery/<?= $mtr['foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $i++ ?>. <?= $mtr['model'] ?></h5>
                                <h6 class="card-title"><?= $mtr['merek'] ?></h6>
                                <p class="card-text">
                                    <td><?= $mtr['harga'] ?></td>
                                </p>
                                <a href="ubah.php?id=<?= $mtr['id_motor']; ?>" class="btn btn-primary">EDIT</a>
                                <a href="hapus.php?id=<?= $mtr['id_motor']; ?>" onclick="return confirm('yakin ingin mengapus foto?');" class="btn btn-danger">HAPUS</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <footer>copyright emmir fagrezi</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html