<?php
require '../function/functions.php';

// ketika tombol registrasi di tekan
if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
         alert('oke sip user baru sudah di tambahkan, silahkan login bang/kak!');
         document.location.href = 'login.php';
         </script>";
    } else {
        echo 'user gagal di tambahkan!';
    }
}

$backLink = '../index.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Danfo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Bebas Neue', cursive;
            background-image: url(galery/cover.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            background-color: white;
        }

        .custom-width {
            width: 100%;
            max-width: 800px;
            max-height: 500px;
            border-radius: 20px;

        }

        .formulir {
            margin: 0 auto;
            padding: 25px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.0);
            color: white;
        }

        .cust-bg {
            background-image: url(galery/bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 0 20px 20px 0;
        }

        .cust-bg h1 {
            font-family: "Danfo", serif;
            color: white;
            font-size: 50px;
            text-align: center;
            margin-top: 140px;

        }

        .tp {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }
    </style>
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div>
        <div class="container mx-auto custom-width tp">
            <div class="row tp2">
                <div class="col-12 col-lg-6 tp3">
                    <div>
                        <form action="" method="post" class="formulir" style="width: 80%">
                            <h1 class="text-center">REGISTRASI</h1>
                            <div class="mb-3 align-items-center">
                                <label for="exampleInputEmail1" class="form-label">username</label>
                                <input type="text" name="username" autofocus autocomplete="off" required class="form-control">

                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password1" class="form-control" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                                <input type="password" name="password2" class="form-control" required id="exampleInputPassword1">
                            </div>
                            <button type="submit" name="registrasi" class="btn btn-primary">registrasi</button>
                            <br>
                            <a href="<?= $backLink ?>" style="color:brown;""><svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                                </svg>kembali
                            </a>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6 cust-bg d-none d-lg-block">
                    <h1>MONAV
                        CLASSICS
                    </h1>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>