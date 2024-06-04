<?php

include 'function/functions.php';
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM motor"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$motor = query("SELECT * FROM motor LIMIT $awalData, $jumlahDataPerHalaman");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>monav classic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/halaman.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MONAV <span>CLASSIC</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item mt-1">
                        <a class="nav-link active" aria-current="page" href="#halamansec">home</a>
                    </li>
                    <li class="nav-item mt-1">
                        <a class="nav-link" href="#halaman2">comunity</a>
                    </li>
                    <li class="nav-item mt-1">
                        <a class="nav-link" href="#gallery">galery</a>
                    </li>
                    <li class="nav-item mt-1">
                        <a href="login/login.php" type="button" class="btn btn-success me-1 custom-btn me-1 mb-1 ">LOGIN</a>
                    </li>
                    <li class="nav-item mt-1">
                        <a href="login/registrasi.php" type="button" class="btn btn-warning me-1 custom-btn mb-3 ">SIGN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="halamansec">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="halaman/galery/slide1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                        <h5>MONAV CLASSIC</h5>
                        <p>Kami menjuaal motor motor bekas yang siap di jual ke anda semua dengan harga murah dan terjangkau.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="halaman/galery/slide2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                        <h5>MONAV CLASSIC</h5>
                        <p>Kami juga menejual motor motor classic</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="halaman/galery/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>MONAV CLASSIC</h5>
                        <p>Kami menjual motor motor keren dan classic tapi modern</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>



    <section id="halaman2">
        <div class="container text-center">
            <h1 class="text-white">KOMUNITAS</h1>
            <div class="row gy-4 mt-4">
                <div class="col-md-6 col-12">
                    <div class="card c1">
                        <div>
                            <img src=" halaman/galery/bamc.png" class="img-fluid rounded-start" alt="...">

                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BAMC</h5>
                            <p class="card-text">Black angels motorcycle club adalah komunitas motor tertua di indonesia, yang didirikan sejak tahun 1979.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 ">
                    <div class="card c1 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="halaman/galery/bbmc.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">BBMC</h5>
                                    <p class="card-text">Didirikan sejak 1988 komunitas ini memiliki prinsip "benteng terakhir adalah persaudaraan".</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card c1 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="halaman/galery/hdci.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">HDCI</h5>
                                    <p class="card-text">berdiri sejak 1990, klub motor ini tersebar di seluruh pelosok indonesia.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>


    <section id="gallery">
        <h1 class="text-center mb-3 text-white">galery</h1>
        <div class="containerg">
            <div class="card2">
                <img class="foto" src="halaman/galery/slide4.jpg" alt="">
            </div>
            <div class="card2">
                <img class="foto" src="halaman/galery/slide5.jpg" alt="">
            </div>
            <div class="card2">
                <img class="foto" src="halaman/galery/slide6.jpg" alt="">
            </div>
            <div class="card2">
                <img class="foto" src="halaman/galery/slide7.jpg" alt="">
            </div>
            <div class="card2">
                <img class="foto" src="halaman/galery/slide8.jpg" alt="">
            </div>
        </div>
    </section>


    <!-- databes -->
    <section class="dashbor min-vh-100 pt-5 pb-5 dashboard">
        <h1 class="text-center text-white">PILIH MOTOR FAVORITE ANDA</h1>



        <div class="container pt-5 ">

            <ul class="pagination">
                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                        <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php else : ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>

            </ul>

            <div class="row gy-4 ">
                <?php $i = 1;
                foreach ($motor as $mtr) : ?>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="card" style="width: 14rem;">
                            <img src="admin/galery/<?= $mtr['foto'] ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $i++ ?>. <?= $mtr['model'] ?></h5>
                                <h6 class="card-title"><?= $mtr['merek'] ?></h6>
                                <p class="card-text">
                                    <td><?= $mtr['harga'] ?></td>
                                </p>
                                <a href="detail.php?id=<?= $mtr['id_motor']; ?>">lihat detail</a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="position-relative cust-foot">
            <div class="position-absolute top-0 start-0">

            </div>
            <div class="position-absolute top-0 start-50 translate-middle-x cust-1">copyright by emmir fahrezi</div>

    </footer>


    <!-- javascript -->

    <script>
        // js scroll index
        const navEl = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar-scrolled');
            } else {
                navEl.classList.remove('navbar-scrolled');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>