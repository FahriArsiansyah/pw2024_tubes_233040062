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

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM apotek WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

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
