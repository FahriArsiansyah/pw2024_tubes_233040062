<?php
require '../function/functions.php';
// cek apakah tombol tambah sudah di klilk atau belum

$id = $_GET['id'];
$apt = query("SELECT * FROM apotek WHERE id = $id")[0];

if (isset($_POST['ubah'])) {

    if (ubah($_POST) > 0) {
        echo "<script>
    alert('data berhasil diubah');
    document.location.href = '../index.php';
    </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pemrograman web | ubah data obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Ubah Data Obat</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $apt['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $apt['nama']; ?>">
            </div>

            <div class="mb-3">
                <label for="dosis" class="form-label">dosis</label>
                <input type="text" class="form-control" id="nim" name="dosis" required value="<?= $apt['dosis']; ?>">
            </div>

            <div class="mb-3">
                <label for="bentuk_sediaan" class="form-label">bentuk_sediaan</label>
                <input type="text" class="form-control" id="bentuk_sediaan" name="bentuk_sediaan" required value="<?= $apt['bentuk_sediaan']; ?>">
            </div>
            <div class="mb-3">
                <label for="produsen" class="form-label">produsen</label>
                <input type="text" class="form-control" id="produsen" name="produsen" required value="<?= $apt['produsen']; ?>">
            </div>

            <div class="mb-3">
                <label for="tanggal_kadaluwarsa" class="form-label">tanggal_kadaluwarsa</label>
                <input type="text" class="form-control" id="tanggal_kadaluwarsa" name="tanggal_kadaluwarsa" required value="<?= $apt['tanggal_kadaluwarsa']; ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required value="<?= $apt['harga']; ?>">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">foto</label>
                <input type="text" class="form-control" id="foto" name="foto" required value="<?= $apt['foto']; ?>">
            </div>
            <button type="submit" name="ubah" class="btn btn-primary">ubah</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>