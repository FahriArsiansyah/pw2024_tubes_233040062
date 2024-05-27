<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/keranjang.css" />

    <title>Radit Beryl Cake</title>
    <link rel="stylesheet" href="../css/keranjang.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-pink">
      <div class="container-fluid">
        <div class="service-icon">
          <svg width="30" height="24" viemBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path
              d="M4 9v-1.974h2v1.974h5v-4h2v4h5v-2h2v2h.755c1.803.091 3.243 1.646 3.243 3.519 0 .961-.382 1.829-.998 2.458v9.023h-22v-9.02c-.43-.438-.747-.993-.9-1.621-.067-.276-.1-.558-.1-.841 0-2.009 1.629-3.479 3.242-3.518h.758zm17 11h-18v2h18v-2zm-18-4.027v2.027h18v-2.027l-.407.025c-.775 0-1.541-.27-2.154-.79-.576.488-1.333.789-2.155.789-.812 0-1.566-.295-2.142-.779-.581.487-1.341.78-2.136.78-.807 0-1.575-.292-2.149-.78-.586.491-1.346.78-2.137.78-.775 0-1.526-.26-2.16-.79-.561.479-1.328.79-2.154.79l-.406-.025zm.29-4.973c-.627.049-1.243.635-1.288 1.421-.051.887.632 1.585 1.454 1.576 1.176-.014 1.915-.86 2.117-1.997.217.88.986 1.975 2.145 1.996 1.156.021 1.99-.959 2.161-1.958l.008-.038c.199 1.04.99 1.996 2.109 1.996 1.155 0 1.917-.872 2.172-1.996.248 1.138 1.035 1.994 2.117 1.997 1.108.003 1.955-.928 2.203-1.997.188.828.804 1.985 2.051 1.998.759.008 1.46-.65 1.46-1.483 0-.837-.649-1.481-1.318-1.517l-17.391.002zm.863-4.451c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.154-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809zm13.999-.026c-1.896-.621-1.35-3.444.891-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.884 1.809zm-6.999-2c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809z"
            />
          </svg>
          <span class="text-white"> RaditBeryl<strong>Cake</strong></span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="homepage.html">Beranda </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="singleproduct.html">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.html">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index1.html">Masuk</a>
            </li>
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="homepage.html" class="text-decoration-none">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
        </ol>
      </nav>
    </div>
    <!-- Breadcrumb -->

    <!-- Keranjang -->
    <div class="container">
      <div class="row row-product">
        <div class="col">
          <table class="table">
            <thead class="table-secondary">
              <tr>
                <th scope="col">Hapus</th>
                <th scope="col">Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Sub Total</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <tr>
                <th scope="row">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                  </svg></i></a>
                </th>
                <td>Kue Ulang Tahun</td>
                <td><img src="../assets/produk/kueultah1.jpg" class="img-keranjang" /></td>
                <td>Rp.150.000</td>
                <td>
                  <button class="button btn-dark btn-sm">-<i class="fas fa-minus"></i></button>
                  <span class="mx-2">1</span>
                  <button class="button btn-dark btn-sm">+<i class="fas fa-plus"></i></button>
                </td>
                <td>Rp.150.000</td>
              </tr>
              <tr>
                <th scope="row">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                  </svg></i></a>
                </th>
                <td>Nastar</td>
                <td><img src="../assets/produk/nastar1.jpg" class="img-keranjang" /></td>
                <td>Rp.50.000</td>
                <td>
                  <button class="button btn-dark btn-sm">-<i class="fas fa-minus"></i></button>
                  <span class="mx-2">1</span>
                  <button class="button btn-dark btn-sm">+<i class="fas fa-plus"></i></button>
                </td>
                <td>Rp.50.000</td>
              </tr>
              <tr>
                <th scope="row">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                  </svg></i></a>
                </th>
                <td>Puding</td>
                <td><img src="../assets/produk/puding1.jpg" class="img-keranjang" /></td>
                <td>Rp.120.000</td>
                <td>
                  <button class="button btn-dark btn-sm">-<i class="fas fa-minus"></i></button>
                  <span class="mx-2">1</span>
                  <button class="button btn-dark btn-sm">+<i class="fas fa-plus"></i></button>
                </td>
                <td>Rp.120.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" colspan="2">Total Keranjang Belanja</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-bold">Total Harga</td>
                <td>Rp.320.000</td>
              </tr>
              <tr>
                <td><button class="btn-dark btn-sm">Checkout</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Keranjang -->

    <!-- Footer -->
    <footer class="bg-light p-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <span>copyright @2023 | Created and Develope by <a href="https://www.instagram.com/f.arsiansyah/?hl=en" class="text-decoration-none text-dark fw-bold">F'ARSIANSYAH</a> </span>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
ccc