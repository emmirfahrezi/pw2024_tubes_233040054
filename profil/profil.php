<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit;
}

require '../function/functions.php';
// Get id_user from the URL
$id = $_GET['id'];

// Query user based on id_user
$user = query("SELECT * FROM user WHERE id_user = $id");

$backLink = '../admin/index.php';

// default back link

if ($user['role'] == 'admin') {
    $backLink = '../admin/index.php';
} elseif ($user['role'] == 'user') {
    $backLink = '../user/index.php';
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Seymour+One&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: gray;
        }

        h1 {
            font-family: 'Seymour One', sans-serif;
        }

        .row {
            width: 68%;
            height: 400px;
            background-color: whitesmoke;
            border: 5px solid white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .po1 {
            display: flex;
            padding: 30px;
            margin-top: 20px;
            align-items: center;
            flex-direction: column;
        }

        /* responsive */
        @media (max-width: 768px) {
            img {
                margin-top: -30px;
                height: 130px;
                width: 130px;
                object-fit: cover;
            }

            h1 {
                font-size: 20px;
                margin-top: 10px;
            }

            .card-body {
                padding: 0 0;
            }

            .row {
                width: 68%;
                height: 500px;
                background-color: #eaeaea;
                border: 5px solid white;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }

            .po1 {
                display: flex;
                padding: 30px;
                margin-top: 40px;
                align-items: center;
                flex-direction: column;
            }


        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-4 col-12 po1">
            <img src="../admin/galery/<?= $user['foto'] ?>" alt="">
            <a href="ubah.php?id=<?php echo $_SESSION['id_user']; ?>" type="button" class="btn btn-info mt-3" style="font-size:10px; font-weight:bold;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                </svg> edit profile</a>
        </div>
        <div class="col-md-8 col-12">
            <h1 class="text-center">my profile</h1>
            <form class="mb-auto">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nama</label>
                    <div class="card">
                        <div class="card-body">
                            <?= $user['username'] ?>
                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">pengguna sebagai</label>
                    <div class="card">
                        <div class="card-body">
                            <?= $user['role'] ?>
                        </div>
                    </div>
                    <a href="<?= $backLink ?>" type="button" class="btn btn-warning mt-4 ">kembali</a>
                </div>


            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>