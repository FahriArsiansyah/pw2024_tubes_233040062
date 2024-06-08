<?php
include './function/functions.php';
$apotek = query("SELECT * FROM apotek");


// ketika tombol cari di tekan
if (isset($_POST['cari'])) {
  $apotek = cari($_POST['keyword']);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylehome.css" >
    <title>Apotek Nyagak</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap');
body {
  background-color: #fff;
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
  color: #2d2d2d;
}
.form-control {
  width: 350px;
}
.img-categori {
  width: 100px;
}
.img-categori:hover {
  transform: scale(1.2);
  transition: 1s;
}
.row-container {
  background-color: #fff;
}

.card-img-top:hover {
  border: 3px solid #2d2d2d;
  transform: scale(1.1);
  transition: 1s;
}
nav {
  background-color: #f0a7f5;
}
    </style>
  </head>
  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container">
      <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M10.999 4.442v-.71c-.598-.346-1-.992-1-1.732 0-1.104.896-2 2-2s2 .896 2 2c0 .74-.402 1.386-1 1.732v.71c.144-.023.268-.053.36-.089 1.206-.459 1.872-2.286 3.948-2.353 2.21-.029 3.418 2.251 5.173 2.769.473.139 1.027.142 1.52.172-.635 4.108-6.593 5.872-11.001 4.725v6.923c.843.262 1.911.611 2.542 1.201 2.008 1.877.83 4.698-1.539 4.787v-1c1.266-.627 1.504-1.961-1.003-2.878v4.301c0 .553-.448 1-1 1s-1-.447-1-1v-4.896c-1.955-.51-5.364-1.17-5.339-4.003.018-1.696 1.55-3.101 3.331-3.101h.01c.553 0 1 .448 1 1 0 .549-.442.994-.989 1-.836.009-1.392.651-1.349 1.192.098 1.124 2.22 1.556 3.336 1.844v-6.369c-4.407 1.146-10.364-.619-10.999-4.726.493-.03 1.047-.033 1.52-.172 1.755-.518 2.963-2.798 5.173-2.769 2.076.067 2.742 1.894 3.948 2.353.092.036.215.065.358.089zm-3.039 13.923c.863.25 1.655.463 2.35.624-1.691.869-1.495 2.002-.311 2.588v1c-2.138-.08-3.305-2.384-2.039-4.212zm6.073-2.606c.889-.257 2.232-.644 2.305-1.567.043-.543-.516-1.183-1.35-1.192-.547-.006-.989-.451-.989-1 0-.552.448-1 1-1h.011c1.772 0 3.313 1.399 3.33 3.101.017 1.273-.851 2.367-1.986 2.934-.6-.505-1.397-.909-2.321-1.276zm5.773-8.647c.512-.24.961-.534 1.308-.886-1.406-.386-2.573-2.218-3.767-2.227-1.241.04-2.034 2.353-4.347 2.461v1.193c.605.22 1.527.336 2.551.323-.124-.484-.177-1.003-.186-1.605.413.611.955 1.129 1.523 1.516.478-.057.958-.142 1.422-.257-.394-.587-.6-1.203-.729-1.879.645.66 1.413 1.068 2.225 1.361zm-8.807-.652c-2.312-.108-3.106-2.421-4.346-2.461-1.194.009-2.361 1.841-3.767 2.227.347.352.796.646 1.308.886.812-.293 1.58-.701 2.225-1.361-.129.676-.335 1.292-.729 1.879.464.115.944.2 1.422.257.568-.387 1.11-.905 1.523-1.516-.009.602-.062 1.121-.186 1.605 1.023.013 1.945-.103 2.55-.322v-1.194z"/></svg>
        </svg>
        <span class="text-white">Apotek <strong>Nyagak</strong></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarNav">
          <form action="" method="POST" class="d-flex ms-auto">
            <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Cari Obat Anda!" aria-label="Cari" autocomplete="off" autofocus/>
            <button class="btn btn-light tombol_cari" type="submit" autocomplete="off" name="cari">Cari!</button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/singleproduct.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/index1.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->

    <!-- Carousel -->
    <div class="container" id="carousel">
        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./image/corou/apoteknyagak.png" class="d-block w-100" alt="..." />
            </div>
    </div>

    <!-- Carousel End -->


    <!-- Kategori -->
    <div class="container mt-5" id="kategori">
    <a href="admin/tambah.php" class="btn btn-primary mb-5">Tambah data Obat</a>
    <div class="row">
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
</div>


    <!-- Kategori End -->

        <!-- Footer -->
        <footer class="bg-light p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span>copyright @2024 | Created and Develope by <a
                                href="https://www.instagram.com/f.arsiansyah/?hl=en"
                                class="text-decoration-none text-dark fw-bold">F'ARSIANSYAH</a>
                            </span>
                    </div>
                </div>
            </div>
        </footer>

    <script src="./script.js"></script>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>