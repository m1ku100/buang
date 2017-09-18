<?php
include "header.php";
include "connect.php";
include "device.php";
session_start();
if (isset($_GET['aksi']) == 'delete') { // mengkonfirmasi jika 'aksi' bernilai 'delete' merujuk pada baris 97 dibawah
    $nim = $_GET['nim']; // ambil nilai id_berita
    $cek = $koneksi->prepare("DELETE FROM user WHERE nim=$nim"); // query untuk memilih entri dengan id_berita yang dipilih
    $cek->execute();
    if ($cek) { // jika query delete berhasil dieksekusi
        echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>'; // maka tampilkan 'Data berhasil dihapus.'
    } else { // jika query delete gagal dieksekusi
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>'; // maka tampilkan 'Data gagal dihapus.'
    }
}

//pagination
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$per_page = 100;
// Page will start from 0 and Multiple by Per Page
$start_from = ($page - 1) * $per_page;
?>




    <div class="ui-content">
<h2>hello <?php
    echo $_SESSION['nim']?></h2>
    <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true" data-theme="f">

<?php
$sql = $koneksi->prepare("SELECT * FROM user ORDER BY nama ASC LIMIT $start_from, $per_page");
$sql->execute(); //query jika filter dipilih
$no = $start_from;
$no++;// mewakili data dari nomor 1
while ($data = $sql->fetch()) {
    ?>
        
    <li><a href="player.php?id=<?php echo $data['id'] ?>"><?php echo $data['nama']; ?> <br><?php echo $data['prodi']?> </a></li>

<?php }
$no++;
?>
        

    </ul>
    </div>
    <?php include "footer.php" ?>