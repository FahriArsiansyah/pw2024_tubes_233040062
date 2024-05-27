<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/product.css">

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
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-pink">
        <div class="container-fluid">
            <div class="service-icon">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M10.999 4.442v-.71c-.598-.346-1-.992-1-1.732 0-1.104.896-2 2-2s2 .896 2 2c0 .74-.402 1.386-1 1.732v.71c.144-.023.268-.053.36-.089 1.206-.459 1.872-2.286 3.948-2.353 2.21-.029 3.418 2.251 5.173 2.769.473.139 1.027.142 1.52.172-.635 4.108-6.593 5.872-11.001 4.725v6.923c.843.262 1.911.611 2.542 1.201 2.008 1.877.83 4.698-1.539 4.787v-1c1.266-.627 1.504-1.961-1.003-2.878v4.301c0 .553-.448 1-1 1s-1-.447-1-1v-4.896c-1.955-.51-5.364-1.17-5.339-4.003.018-1.696 1.55-3.101 3.331-3.101h.01c.553 0 1 .448 1 1 0 .549-.442.994-.989 1-.836.009-1.392.651-1.349 1.192.098 1.124 2.22 1.556 3.336 1.844v-6.369c-4.407 1.146-10.364-.619-10.999-4.726.493-.03 1.047-.033 1.52-.172 1.755-.518 2.963-2.798 5.173-2.769 2.076.067 2.742 1.894 3.948 2.353.092.036.215.065.358.089zm-3.039 13.923c.863.25 1.655.463 2.35.624-1.691.869-1.495 2.002-.311 2.588v1c-2.138-.08-3.305-2.384-2.039-4.212zm6.073-2.606c.889-.257 2.232-.644 2.305-1.567.043-.543-.516-1.183-1.35-1.192-.547-.006-.989-.451-.989-1 0-.552.448-1 1-1h.011c1.772 0 3.313 1.399 3.33 3.101.017 1.273-.851 2.367-1.986 2.934-.6-.505-1.397-.909-2.321-1.276zm5.773-8.647c.512-.24.961-.534 1.308-.886-1.406-.386-2.573-2.218-3.767-2.227-1.241.04-2.034 2.353-4.347 2.461v1.193c.605.22 1.527.336 2.551.323-.124-.484-.177-1.003-.186-1.605.413.611.955 1.129 1.523 1.516.478-.057.958-.142 1.422-.257-.394-.587-.6-1.203-.729-1.879.645.66 1.413 1.068 2.225 1.361zm-8.807-.652c-2.312-.108-3.106-2.421-4.346-2.461-1.194.009-2.361 1.841-3.767 2.227.347.352.796.646 1.308.886.812-.293 1.58-.701 2.225-1.361-.129.676-.335 1.292-.729 1.879.464.115.944.2 1.422.257.568-.387 1.11-.905 1.523-1.516-.009.602-.062 1.121-.186 1.605 1.023.013 1.945-.103 2.55-.322v-1.194z"/></svg>
            </svg>
                    <span class="text-white"> Apotek<strong >Nyagak</strong></span>
                </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="homepage.php">Beranda </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Masuk</a>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
                <li class="breadcrumb-item active" aria-current="page">Produk</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb -->

    <!-- single product -->
    <div class="container">
        <div class="row row-product">
            <div class="col-lg-5">
                <figure class="figure">
                    <img src="../image/ultraflu.jpg" class="figure-img img-fluid" width="300px" height="5000px">
                    <figcaption class="figure-caption d-flex justify-content-evenly">
                        <a href="#">
                            <img src="../image/ultraflu.jpg" class="figure-img img-fluid" width="60px" height="70px">
                        </a>
                        <a href="#">
                            <img src="../image/ultraflu.jpg" class="figure-img img-fluid" width="60px" height="70px">
                        </a>
                        <a href="#">
                            <img src="../image/ultraflu.jpg" class="figure-img img-fluid" width="60px" height="70px">
                        </a>
                    </figcaption>
                </figure>
            </div>

            <di class="col-lg-7">
                <h4>ULTRAFLU</h4>
                <div class="garis-product"></div>
                <h3 class="text-muted mb-2">Rp. 4.000</h3>

                <button class="button btn-dark btn-sm">-<i class="fas fa-minus"></i></button>
                <span class="mx-2">1</span>
                <button class="button btn-warning btn-sm">+<i class="fas fa-plus"></i></button>
                <span class="mx-2">Tersisa 29</span>

                <div class="btn-produk mt-4">
                    <a href="" class="btn btn-light bt-lg" style="font-size: 10px"><i><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M10 20.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.304-17l-3.431 14h-2.102l2.541-11h-16.812l4.615 13h13.239l3.474-14h2.178l.494-2h-4.196z" />
                            </svg></i>Masukan Keranjang</a>
                </div>
                <div class="btn-produk mt-1">
                    <a href="" class="btn btn-warning bt-lg" style="font-size: 10px">Beli Sekarang</a>
                </div>
        </div>
    </div>
    <!-- single product -->

    <!-- review -->
    <div class="container">
        <div aria-label="breadcrumb" style="background-color: #fff">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Deskripsi-tab" data-bs-toggle="tab"
                            data-bs-target="#Deskripsi" type="button" role="tab" aria-controls="Deskripsi"
                            aria-selected="true">Deskripsi Obat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Review-tab" data-bs-toggle="tab" data-bs-target="#Review"
                            type="button" role="tab" aria-controls="Review" aria-selected="false">Review
                            Khasiat Obat</button>
                    </li>
                </ul>
                <div class="tab-content p-3" id="myTabContent">
                    <div class="tab-pane fade show active Deskripsi" id="Deskripsi" role="tabpanel"
                        aria-labelledby="Deskripsi-tab">
                        <p>
                            Ultraflu adalah obat yang bermanfaat <br>
                            untuk meringankan gejala batuk pilek atau flu,<br>
                            seperti demam, sakit kepala, hidung tersumbat,<br>
                            bersin-bersin, serta batuk. <br>
                        </p>
                    </div>
                    <div class="tab-pane fade review" id="Review" role="tabpanel" aria-labelledby="Review-tab">
                        <div class="row">
                            <div class="col-1">
                                <img src="../rivew/emmir.jpg" class="review-img rounded-circle" width="50" height="50">
                            </div>
                            <div class="col">
                                <h5 class="review-name">Emmir</h5>
                                <p class="review-des">Sangat rekomended, Rasa kue nya enak.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <img src="../assets/rivew/jo.jpg" class="review-img rounded-circle" width="50" height="50">
                            </div>
                            <div class="col">
                                <h5 class="review-name">Jojey</h5>
                                <p class="review-des">Cocok dipesan saat ada teman yang sedang berulang tahun</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <img src="../assets/rivew/ara.jpg" class="review-img rounded-circle" width="50" height="50">
                            </div>
                            <div class="col">
                                <h5 class="review-name">Ara</h5>
                                <p class="review-des">Bisa Request gambar kue nya, rekomended pokok nya!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <img src="../assets/rivew/cinta.jpg" class="review-img rounded-circle" width="50" height="50">
                            </div>
                            <div class="col">
                                <h5 class="review-name">Cinta</h5>
                                <p class="review-des">Bisa Request ukuran kue nya dan harganya sesuai, the best pokonya!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- review -->
    

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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>ccc