<?php
session_start();
require '../function/functions.php';
// Get id_user from the URL
$id = $_GET['id_user'];

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
    <style>
        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
    </style>
</head>

<body>
    <div class="row">
        <div class="col-4  po1">
            <img src="../admin/galery/<?= $user['foto'] ?>" alt="">
            <button type="button" class="btn btn-info mt-3">Info</button>
        </div>
        <div class="col-8">
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