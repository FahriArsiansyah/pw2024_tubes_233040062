<?php
function koneksi()
{
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040062') or die('Koneksi ke DB gagal!');

    return $db;
}

function query($sql)
{
    //Koneksi ke Database
    $conn = koneksi();

    //Lakukan query ke tabel apotek
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    //Menyiapkan data apotek (fetch)
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Tambah

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $dosis = htmlspecialchars($data['dosis']);
    $bentuk_sediaan = htmlspecialchars($data['bentuk_sediaan']);
    $produsen = htmlspecialchars($data['produsen']);
    $tanggal_kadaluwarsa = htmlspecialchars($data['tanggal_kadaluwarsa']);
    $harga = htmlspecialchars($data['harga']);
    $foto = htmlspecialchars($data['foto']);

    $sql = "INSERT INTO apotek
            VALUES (null, '$nama', '$dosis', '$bentuk_sediaan', '$produsen', '$tanggal_kadaluwarsa', '$harga', '$foto')
            ";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Hapus

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM apotek WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Ubah

function ubah($data)
{
    $conn = koneksi();


    $id =  htmlspecialchars($data['id']);
        $nama = htmlspecialchars($data['nama']);
        $dosis = htmlspecialchars($data['dosis']);
        $bentuk_sediaan = htmlspecialchars($data['bentuk_sediaan']);
        $produsen = htmlspecialchars($data['produsen']);
        $tanggal_kadaluwarsa = htmlspecialchars($data['tanggal_kadaluwarsa']);
        $harga = htmlspecialchars($data['harga']);
        $foto = htmlspecialchars($data['foto']);

        $query = "UPDATE apotek SET
                    nama = '$nama',
                    dosis = '$dosis',
                    bentuk_sediaan = '$bentuk_sediaan',
                    produsen = '$produsen',
                    tanggal_kadaluwarsa = '$tanggal_kadaluwarsa',
                    harga = '$harga',
                    foto = '$foto'
                WHERE id = $id
                    ";

        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
}

// Search

function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM apotek
                    WHERE 
                    nama LIKE '%$keyword%' OR
                    bentuk_sediaan LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'
                    ";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Fungsi login
function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);

  // cek dulu username nya
  if ($user = query("SELECT * FROM user WHERE username = '$username'")[0]) {
    if (password_verify($password, $user['password'])) {

      $_SESSION['login'] = true;
      $_SESSION['role'] = $user['role'];
      $_SESSION['id'] = $user['user'];

      // cek kondisi admin atau user
      if ($user['role'] == 'admin') {
        header('Location: ../admin/index.php');
      } else {
        header('Location: ../user/index.php');
      }
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

// Fungsi register
function register($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username /  password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username / Password Tidak Boleh Kosong!');
            document.location.href = '../login/register.php';
          </script>";

    return false;
  }

  // jika username sudah ada 
  if (query("SELECT * FROM user WHERE username = '$username'  ")) {
    echo "<script>
            alert('Username Sudah Terdaftar!');
            document.location.href = '../login/register.php';
          </script>";

    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Tidak Sesuai!');
            document.location.href = './login/register.php';
          </script>";

    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = '../login/register.php';
          </script>";

    return false;
  }

  // Get role from user
  $role = 'user';

  // jika username & password sudah sesuai 
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel users

  // jika username & password sudah sesuai
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user (username, password, role)
                  VALUES
            ('$username', '$password_baru', '$role')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}