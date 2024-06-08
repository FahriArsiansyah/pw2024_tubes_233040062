<?php 
require '../function/functions.php';
$apotek = cari($_GET['keyword']);

?>

        <div class="contonor">
            <?php if(empty($apotek)) : ?>
                <div class="card border-danger mb-3" style="max-width: 24rem;">
                    <div class="card-body text-danger">
                        <h5 class="card-title">Data tidak ditemukan!</h5>
                    </div>
                </div>
            <?php endif ?>

            <?php 
            $i = 1;
            foreach ($apotek as $apt) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="image/<?= $apt['foto']; ?>" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $apt['nama']; ?></h5>
                            <p><?= $apt['dosis']; ?></p>
                            <p><?= $apt['bentuk_sediaan']; ?></p>
                            <p><?= $apt['produsen']; ?></p>
                            <p><?= $apt['tanggal_kadaluwarsa']; ?></p>
                            <p><?= $apt['harga']; ?></p>
                            <a href="admin/ubah.php?id=<?= $apt['id'] ?>" class="btn btn-primary">Ubah</a>
                            <a href="admin/hapus.php?id=<?= $apt['id'] ?>" class="btn btn-primary">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
