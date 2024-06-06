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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



    <!-- css -->

    <style>
        * {
            font-family: "Bebas Neue", sans-serif;
            margin: 0;
            padding: 0;



        }

        .navbar {
            position: fixed;
            background-color: transparent;
            padding: 10px 20px;
            transition: 0.5s;

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

        .navbar-scrolled {
            background-color: black;
            box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.2);
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


        /* footer */
        .gapfoot {
            width: 100%;
            display: flex;
            gap: 20px;
            margin-top: -20px;
            margin-bottom: 8px;
            justify-content: center;
            align-items: center;

        }

        .back {
            color: rgb(196, 194, 194);
            margin-bottom: 13px;
            margin-top: -35px;
        }

        svg {
            color: white;
            font-size: 30px;
        }

        footer {
            background-color: rgb(27, 26, 26);
            color: white;
            padding: 50px 30px;
            height: 50px;
            width: 100%;
        }

        /* footerend */

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
                        <a class="nav-link active" aria-current="page" href="#home"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                            </svg> HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../profil/profil.php?id=<?php echo $_SESSION['id_user']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../order/order.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg> ORDER COSTUMER</a>
                    </li>
                </ul>
                <div class="gap">
                    <a class="btn btn-primary mr-3" href="cetak.php" target="_blank" role="button">cetak daftar motor</a>
                    <a class="btn btn-danger" href="../login/logout.php" role="button">logout</a>

                </div>
            </div>
        </div>
    </nav>


    <!-- navbar finish -->
    <section id="home">
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
                <div class="d-flex mt-2 " style="width:40%;">
                    <select name="sort_option" style="margin-right: 5px;">
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
                        <div class="col-md-6 col-sm-6 col-6 col-lg-3" data-aos="fade-up">
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

    <!-- footer -->
    <footer>
        <div class="position-relative cust-foot text-center">
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

    <!-- endfooter -->

    <script src="../js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

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

</html