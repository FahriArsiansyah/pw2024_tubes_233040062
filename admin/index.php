<?php
include '../function/functions.php';
$apotek = query("SELECT * FROM apotek");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>apotek nyagak | admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5" id="kategori">
    <a href="admin/tambah.php" class="btn btn-primary mb-5">Tambah data Obat</a>
    <div class="row">
        <?php 
        $i = 1;
        foreach ($apotek as $apt) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="../image/<?= $apt['foto']; ?>" class="card-img-top" alt="..."  style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $apt['nama']; ?></h5>
                        <p><?= $apt['dosis']; ?></p>
                        <p><?= $apt['bentuk_sediaan']; ?></p>
                        <p><?= $apt['produsen']; ?></p>
                        <p><?= $apt['tanggal_kadaluwarsa']; ?></p>
                        <p><?= $apt['harga']; ?></p>
                        <a href="/admin/ubah.php?id=<?= $apt['id'] ?>" class="btn btn-primary">Ubah</a>
                        <a href="/admin/hapus.php?id=<?= $apt['id'] ?>" class="btn btn-primary">Hapus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>