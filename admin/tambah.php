<?php
require '../function/functions.php';


// Cek apaka tombol tambah sudah di-klik
if (isset($_POST['tambah'])) {
  // Cek apakah data berhasil ditambahkan
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diitambahkan!');
            document.location.href = '../index.php';
          </script>";
  }
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemrograman Web | Tambah Data Obat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container col-8">
    <h1>Tambah Data Obat</h1>

    <form action="" method="POST">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>


      <div class="mb-3">
        <label for="dosis" class="form-label">Dosis</label>
        <input type="text" class="form-control" id="dosis" name="dosis" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Bentuk Sediaan</label>
        <input type="text" class="form-control" id="bentuk_sediaan" name="bentuk_sediaan" required>
      </div>


      <div class="mb-3">
        <label for="produsen" class="form-label">Produsen</label>
        <input type="text" class="form-control" id="produsen" name="produsen" required>
      </div>

      <div class="mb-3">
        <label for="tanggal_kadaluwarsa" class="form-label">Tanggal_Kadaluwarsa</label>
        <input type="text" class="form-control" id="tanggal_kadaluwarsa" name="tanggal_kadaluwarsa" required>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" required>
      </div>

      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="harga" name="foto" required>
      </div>

      <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>

    </form>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>