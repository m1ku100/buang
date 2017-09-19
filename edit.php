<?php
include "header.php";
include "connect.php";
include "device.php";
session_start();
$nama = $_GET['nim'];
$sql = $koneksi->prepare("SELECT * FROM user WHERE nim =$nama");
$sql->execute(); //query jika filter dipilih
$data = $sql->fetch();
?>
    <div data-role="content" class="ui-content" style="text-align: center">

        <img src="images/person-flat.png" style="width: 128px;height: 128px">

        <h2><?php
            echo $data['nama']?></h2>
        <br>
        <form method="post" action="editpro.php">
        <ul data-role="listview" data-themes="b">
            <li><b><center>EDIT</center></b></li>
            <li><b>NIM</b><br><input value="<?php echo $data['nim']?>" disabled name="nim"></li>
            <li><b>Email</b><br><input value="<?php echo $data['email']?>" name="email"></li>
            <li><b>Alamat asal</b><br><input value="<?php echo $data['alamat_asal']?>" name="alamat_asal"></li>
            <li><b>Alamat Tinggal</b><br><input value="<?php echo $data['alamat_tinggal']?>" name="alamat_tinggal"></li>
            <li><b>No. Telp</b><br><input name="notelp"></li>
            <li><b>Program Studi</b><br><?php echo $data['prodi']?></li>

            <li><input type="submit" class="ui-btn ui-btn-b" data-role="input" value="SAVE" data-theme="b" ></li>

        </ul>
        </form>
    </div>

<?php include "footer.php" ?>