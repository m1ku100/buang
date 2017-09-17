<?php
session_start();
include "connect.php";

if (isset($_POST['nim']) && isset($_POST['password'])) {
    $query = "SELECT * FROM user WHERE nim = '" . $_POST['nim'] . "' AND password = '" . $_POST['password'] . "'";
    $hasil = $koneksi->query($query);
    if ($hasil->rowCount() == 1) {
        $hasil = $hasil->fetchAll();
        echo 'Anda berhasil login !';
        # menyimpan session
        $_SESSION['nim'] = $hasil[0]['nim'];
        $_SESSION['nama'] = $hasil[0]['nama'];
        $_SESSION['prodi'] = $hasil[0]['prodi'];
        $_SESSION['nim'] = $hasil[0]['nim'];
        $_SESSION['email'] = $hasil[0]['email'];
        $_SESSION['alamat_asal'] = $hasil[0]['alamat_asal'];
        $_SESSION['alamat_tinggal'] = $hasil[0]['alamat_tinggal'];

        header("location: homes.php");
    } # jika ssn dan password salah atau tidak ada
    else {
        echo 'Salah !';
    }
}
?>