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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MONAV <span>CLASSIC</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#halamansec">home</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link" href="#halaman2">comunity</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link" href="#gallery">galery</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link" href="#dafmo">motor</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="login/login.php" type="button" class="btn btn-success me-1 custom-btn me-1 mb-1 ">LOGIN</a>
                    </li>
                    <li class="nav-item mt-3">
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
                        <p>Kami memberikan daftar motor motor classic dan keren, anda tidak perlu lagi bingung untuk mencari motor impian anda</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="halaman/galery/slide2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                        <h5>MONAV CLASSIC</h5>
                        <p>Bingung pengen punya motor kece? temukan disini aja, kami menyediakan berbagai daftar motor menarik.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="halaman/galery/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>MONAV CLASSIC</h5>
                        <p>motor keren classic modern ada semuanya disini/p>
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
                <div class="col-md-6 col-12" data-aos="fade-up">
                    <div class="card c1 ">
                        <div>
                            <img src=" halaman/galery/bamc.png" class="img-fluid rounded-start" alt="...">

                        </div>
                        <div class="card-body ">
                            <h5 class="card-title">BAMC</h5>
                            <p class="card-text">Black angels motorcycle club adalah komunitas motor tertua di indonesia, yang didirikan sejak tahun 1979.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 ">
                    <div class="card c1 mb-3" style="max-width: 540px;" data-aos="fade-up">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="halaman/galery/bbmc.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body ">
                                    <h5 class="card-title">BBMC</h5>
                                    <p class="card-text">Didirikan sejak 1988 komunitas ini memiliki prinsip "benteng terakhir adalah persaudaraan".</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card c1 mb-3" style="max-width: 540px;" data-aos="fade-up">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="halaman/galery/hdci.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body ">
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
    <section id="dafmo" class="dashbor min-vh-100 pt-5 pb-5 dashboard">
        <h1 class="text-center text-white">TEMUKAN MOTOR IMPIAN ANDA</h1>



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
                    <div class="col-md-6 col-sm-6 col-6 col-lg-3" data-aos="fade-up">
                        <div class="card" style="width: 14rem;">
                            <img src="admin/galery/<?= $mtr['foto'] ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $i++ ?>. <?= $mtr['model'] ?></h5>
                                <h6 class="card-title"><?= $mtr['merek'] ?></h6>
                                <p class="card-text">
                                    <td>RP <?= number_format($mtr['harga'], 0, ',', '.') ?></td>
                                </p>


                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="position-relative cust-foot text-center">

            <div class="back">
                <a href="#halamansec">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
                    </svg>
                </a>
            </div>
            <div class="gapfoot">
                <a href="https://www.instagram.com/_emmir0/#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </a>
                <a href="https://x.com/fahrezi777?t=e7zUZJayI0hXvUHLF5Tn4w&s=09">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/emmir-fahrezi-a939b9281?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                    </svg>

                </a>
            </div>
            <div class="">copyright by emmir fahrezi</div>

        </div>

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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>