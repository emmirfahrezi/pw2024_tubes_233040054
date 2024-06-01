<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit;
}

include '../function/functions.php';


if (isset($_POST['cari'])) {
    $motor = cari($_POST['keyword']);
} else {
    $motor = query("SELECT * FROM motor");
}


if (isset($_POST['sort_option'])) {
    $sort_option = $_POST['sort_option'];
    switch ($sort_option) {
        case 'model_a-z':
            $motor = query("SELECT * FROM motor ORDER BY model ASC");
            break;
        case 'model_z-a':
            $motor = query("SELECT * FROM motor ORDER BY model DESC");
            break;
        case 'merek_a-z':
            $motor = query("SELECT * FROM motor ORDER BY merek ASC");
            break;
        case 'merek_z-a':
            $motor = query("SELECT * FROM motor ORDER BY merek DESC");
            break;
        case 'harga_low-high':
            $motor = query("SELECT * FROM motor ORDER BY harga ASC");
            break;
        case 'harga_high-low':
            $motor = query("SELECT * FROM motor ORDER BY harga DESC");
            break;
        default:
            $motor = query("SELECT * FROM motor");
            break;
    }
} else {
    $motor = query("SELECT * FROM motor");
}


$user = query("SELECT * FROM user");

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
            background-color: #404345;
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

        @media (max-width: 768px) {
            .carousel-item img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
        }

        @media (max-width: 968px) {
            .carousel-item img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
        }

        @media (max-width: 1968px) {
            .carousel-item img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
        }

        @media (max-width: 500px) {
            .card {
                width: 150px !important;
                height: 250px !important;
            }

            .card h5 {
                font-size: 16px !important;
            }

            .card h6 {
                font-size: 15px !important;
            }

            .card img {
                height: 100px !important;
            }

            .carousel-caption h5 {
                font-size: 30px;
            }
        }

        /* end responsive */
        footer {
            background-color: rgb(27, 26, 26);
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
                        <a class="nav-link" href="../profil/profil.php?id_user=<?php echo $_SESSION['id_user']; ?>">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../order/order.php">order konsumen</a>
                    </li>
                </ul>
                <div class="gap">
                    <a class="btn btn-primary mr-3" href="cetak.php" target="_blank" role="button">pdf</a>
                    <a class="btn btn-danger" href="../login/logout.php" role="button">logout</a>

                </div>
            </div>
        </div>
    </nav>


    <!-- navbar finish -->
    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="galery/slide6.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-sm-block" style="z-index: 10; position: absolute; top: 50%; bottom:-50%">
                        <h5>WELCOME BACK ADMIN TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="galery/6648581ce8bbd.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-sm-block" style="z-index: 10;  position: absolute; top: 50%; bottom:-50%">
                        <h5>WELCOME BACK ADMIN TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="galery/664c281c3476f.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-sm-block" style="z-index: 10;  position: absolute; top: 50%; bottom:-50%">
                        <h5>WELCOME BACK ADMIN TO MONAV CLASSIC</h5>
                        <p>Temukan motor impian mu disini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dashbor min-vh-100 pt-5 pb-5 dashboard">
        <h1 class="text-center text-white">PILIH MOTOR FAVORITE ANDA</h1>


        <div class="container pt-5 ">

            <!-- button tambah motor -->
            <a class="btn btn-primary mb-2" href="tambah_motor.php" role="button">TAMBAH MOTOR</a>

            <!-- form pencarian -->
            <form class="mb-2" role="search" action="" method="post">
                <div class="d-flex" style="width:40%;">
                    <input class="form-control me-2 keyword" type="search" aria-label="search" name="keyword" size="40" placeholder="masukan keyword pencarian" autocomplete="off">
                    <button class="btn btn-primary tombol-cari" type="submit" name="cari">Cari</button>
                </div>
                <div class="d-flex mt-2" style="width:40%;">
                    <select name="sort_option">
                        <option value="" class="text-center">------urutkan------</option>
                        <option value="model_a-z">Model A-Z</option>
                        <option value="model_z-a">Model Z-A</option>
                        <option value="merek_a-z">Merek A-Z</option>
                        <option value="merek_z-a">Merek Z-A</option>
                        <option value="harga_low-high">Harga Terendah-Tertinggi</option>
                        <option value="harga_high-low">Harga Tertinggi-Terendah</option>
                    </select>
                    <button class="btn btn-primary tombol-cari" type="submit" name="urutkan">urutkan</button>
                </div>
            </form>

            <div class="containers">
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
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="card" style="width: 14rem;">
                                <img src="galery/<?= $mtr['foto'] ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $i++ ?>. <?= $mtr['model'] ?></h5>
                                    <h6 class="card-title"><?= $mtr['merek'] ?></h6>
                                    <p class="card-text">
                                        <td><?= number_format($mtr['harga'], 0, ',', '.') ?></td>
                                    </p>
                                    <a href="details.php?id=<?= $mtr['id_motor']; ?>">lihat detail</a>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/script.js"></script>


    <footer>copyright emmir fagrezi</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html