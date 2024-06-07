<?php
include '../function/functions.php';
$apotek = query("SELECT * FROM apotek");

// ambil id dari url
$id = $_GET['id'];

// query apotek berdasarkan id
$apt = query("SELECT * FROM apotek WHERE id_apotek=$id");?>

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lihat Detail</h1>
    <div class="row">
        <?php 
        $i = 1;
        foreach ($apotek as $apt) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="image/<?= $apt['foto']; ?>" class="card-img-top" alt="..."  style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $apt['nama']; ?></h5>
                        <p><?= $apt['dosis']; ?></p>
                        <p><?= $apt['bentuk_sediaan']; ?></p>
                        <p><?= $apt['produsen']; ?></p>
                        <p><?= $apt['tanggal_kadaluwarsa']; ?></p>
                        <p><?= $apt['harga']; ?></p>
                        <a href="" class="btn btn-primary">Hapus</a>
                        <a href="#" class="btn btn-primary">Ubah</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>