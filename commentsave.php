<?php
session_start();
try {
include 'connect.php';
$isi = $_POST['isi'];
$ngepost = $_SESSION['nama'];

//    $pindahFoto = "images/user/" .$_FILES ['FOTO']["name"].(new DateTime())->format("Y-m-d_H-i-s.u").".jpg";
if ($koneksi->exec("INSERT INTO komentar (isi, nama) VALUES ('$isi', '$ngepost')")) {
//        $query = "SELECT * FROM user WHERE nim = '" . $_POST['nim'] . "' AND password = '" . $_POST['password'] . "'";
//        $check = $koneksi->query($query);
//        $_SESSION['id'] = $check->fetchAll();
header("Location:main.php");
}
} catch (PDOException $exception) {
}
?>