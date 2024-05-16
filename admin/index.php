<?php
include 'function/functions.php';
$motor = query("SELECT * FROM motor");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/cssadmin.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">admin</a>
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
                    <div class="carousel-caption d-none d-md-block" style="z-index: 2">
                        <h5>WELCOME TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="galery/slide9.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index: 2">
                        <h5>WELCOME TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="z-index: 2">
                        <h5>WELCOME TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dashbor min-vh-100 pt-5 pb-5 bg-secondary">
        <h1 class="text-center ">PILIH MOTOR FAVORITE ANDA</h1>

        <a href="tambah_motor.php">tambah motor</a>
        <br>


        <div class="container pt-5">
            <div class="row">
                <?php $i = 1;
                foreach ($motor as $mtr) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="galery/slide6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $i++ ?>. <?= $mtr['model'] ?></h5>
                                <h6 class="card-title"><?= $mtr['merek'] ?></h6>
                                <p class="card-text">
                                    <td><?= $mtr['harga'] ?></td>
                                </p>
                                <a href="#" class="btn btn-primary">EDIT</a>
                                <a href="#" class="btn btn-danger">HAPUS</a>
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