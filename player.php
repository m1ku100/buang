<?php
include "header.php";
include "connect.php";
include "device.php";
session_start();
$id = $_GET['id'];
$sql = $koneksi->prepare("SELECT * FROM user WHERE id =$id");
$sql->execute(); //query jika filter dipilih
$data = $sql->fetch();
?>
    <div data-role="content" class="ui-content" style="text-align: center">
        <img src="images/person-flat.png" style="width: 128px;height: 128px">

        <h2><?php
            echo $data['nama']?></h2>
        <br>
        <ul data-role="listview" data-themes="b">
            <li><b><center>BIO</center></b></li>
            <li><b>NIM</b><br><?php echo $data['nim']?></li>
            <li><b>Email</b><br><?php echo $data['email']?></li>
            <li><b>Alamat asal</b><br><?php echo $data['alamat_asal']?></li>
            <li><b>Alamat Tinggal</b><br><?php echo $data['alamat_tinggal']?></li>
            <li><b>No. Telp</b><br><?php echo $data['email']?></li>
            <li><b>Program Studi</b><br><?php echo $data['prodi']?></li>


        </ul>
    </div>
<div data-role="footer" data-position="fixed" data-theme="c">
    <div data-role="navbar">
        <ul>

            <li><a href="homes.php"><i class="fa fa-2x fa-backward"></i></a></li>


        </ul>
    </div>
</div>
</body>