<?php
include '../function/functions.php';
$motor = cari($_GET['keyword']);
?>

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
        <div class="col-md-3">
            <div class="card" style="width: 14rem;">
                <img src="../admin/galery/<?= $mtr['foto'] ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= $i++ ?>. <?= $mtr['model'] ?></h5>
                    <h6 class="card-title"><?= $mtr['merek'] ?></h6>
                    <p class="card-text">
                        <td><?= $mtr['harga'] ?></td>
                    </p>
                    <a href="details.php?id=<?= $mtr['id_motor']; ?>">lihat detail</a>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>