<?php
include "header.php";
include "connect.php";
include "device.php";
session_start();
$nama = $_SESSION['nama'];
$sql = $koneksi->prepare("SELECT * FROM user WHERE nama =$nama");
$sql->execute(); //query jika filter dipilih
$data = $sql->fetchColumn();
?>
    <div data-role="content" class="ui-content" style="text-align: center">
        <img src="images/person-flat.png" style="width: 128px;height: 128px">

        <h2><?php
            echo $_SESSION['nama']?></h2>
        <br>
        <ul data-role="listview" data-themes="b">
            <li><b><center>BIO</center></b></li>
            <li><b>NIM</b><br><?php echo $_SESSION['nim']?></li>
            <li><b>Email</b><br><?php echo $_SESSION['email']?></li>
            <li><b>Alamat asal</b><br><?php echo $_SESSION['alamat_asal']?></li>
            <li><b>Alamat Tinggal</b><br><?php echo $_SESSION['alamat_tinggal']?></li>
            <li><b>No. Telp</b><br><?php echo $_SESSION['email']?></li>
            <li><b>Program Studi</b><br><?php echo $_SESSION['prodi']?></li>
            <li><a href="logout.php" class="ui-icon-power" data-theme="f">Keluar</a></li>

        </ul>
    </div>

<?php include "footer.php" ?>