<?php
session_start();
try {
    include 'connect.php';
    $nama = $_POST['nama'];
    $nim = $_POST ['nim'];
    $email = $_POST ['email'];
    $prodi = $_POST['prodi'];
    //$kelas = $_POST ['Kelas'];
    //$lahir =$_POST ['Lahir'];

    //$agama = $_POST['Agama'];
    $password = $_POST ['password'];
//    $foto = $_FILES ['FOTO']["tmp_name"];
//    $pindahFoto = "images/user/" .$_FILES ['FOTO']["name"].(new DateTime())->format("Y-m-d_H-i-s.u").".jpg";
    if ($koneksi->exec("update user set (email) VALUES ( '$email' ) WHERE nim =$nim ")) {
//        $query = "SELECT * FROM user WHERE nim = '" . $_POST['nim'] . "' AND password = '" . $_POST['password'] . "'";
//        $check = $koneksi->query($query);
//        $_SESSION['id'] = $check->fetchAll();
        header("Location:profile.php");
    }
} catch (PDOException $exception) {
}
?>