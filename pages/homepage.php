<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/stylehome.css" >

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-pink">
      <div class="container">
        <svg width="30" height="24" viemBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
          <path
            d="M4 9v-1.974h2v1.974h5v-4h2v4h5v-2h2v2h.755c1.803.091 3.243 1.646 3.243 3.519 0 .961-.382 1.829-.998 2.458v9.023h-22v-9.02c-.43-.438-.747-.993-.9-1.621-.067-.276-.1-.558-.1-.841 0-2.009 1.629-3.479 3.242-3.518h.758zm17 11h-18v2h18v-2zm-18-4.027v2.027h18v-2.027l-.407.025c-.775 0-1.541-.27-2.154-.79-.576.488-1.333.789-2.155.789-.812 0-1.566-.295-2.142-.779-.581.487-1.341.78-2.136.78-.807 0-1.575-.292-2.149-.78-.586.491-1.346.78-2.137.78-.775 0-1.526-.26-2.16-.79-.561.479-1.328.79-2.154.79l-.406-.025zm.29-4.973c-.627.049-1.243.635-1.288 1.421-.051.887.632 1.585 1.454 1.576 1.176-.014 1.915-.86 2.117-1.997.217.88.986 1.975 2.145 1.996 1.156.021 1.99-.959 2.161-1.958l.008-.038c.199 1.04.99 1.996 2.109 1.996 1.155 0 1.917-.872 2.172-1.996.248 1.138 1.035 1.994 2.117 1.997 1.108.003 1.955-.928 2.203-1.997.188.828.804 1.985 2.051 1.998.759.008 1.46-.65 1.46-1.483 0-.837-.649-1.481-1.318-1.517l-17.391.002zm.863-4.451c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.154-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809zm13.999-.026c-1.896-.621-1.35-3.444.891-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.884 1.809zm-6.999-2c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809z"
          />
        </svg>
        <span class="text-white">Apotek <strong>Nyagak</strong></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Cari Barang Anda!" aria-label="Cari" />
            <button class="btn btn-light" type="submit">Cari</button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="singleproduct.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index1.php">Masuk</a>
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
            <img src="../image/corou/apoteknyagak.png" class="d-block w-100" alt="..." />
            </div>
        </div>
    </div>

    <!-- Carousel End -->

    

        <!-- Produk -->
        <div class="container mt-5">
        <div class="judul-Produk" style="background-color: #f0a7f5; padding: 5px 10px;">
            <h5 class="text-center" style="margin-top: 5px;">PRODUK</h5>
        </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                    <div class="Card text-center">
                        <img src="../image/Amoxicillin.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Amoxicillin</h6>
                            <p class="card-text">Rp.40.500</p>
                            <a href="#" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                    <div class="Card text-center">
                        <img src="../image/bodrex.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Bodrex</h6>
                            <p class="card-text">Rp.11.000</p>
                            <a href="#" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                    <div class="Card text-center">
                        <img src="../image/ultraflu.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Ultraflu</h6>
                            <p class="card-text">Rp.4.000</p>
                            <a href="#" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                    <div class="Card text-center">
                        <img src="../image/sanmol.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Sanmol Paracetamol</h6>
                            <p class="card-text">Rp.2.500</p>
                            <a href="#" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                    <div class="Card text-center">
                        <img src="../image/panadol.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Panadol</h6>
                            <p class="card-text">Rp.14.000</p>
                            <a href="#" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                    <div class="Card text-center">
                        <img src="../image/ibuprofen.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Ibuprofen</h6>
                            <p class="card-text">Rp.2.600</p>
                            <a href="#" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Produk End -->

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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>