<?php
include "header.php";
include "device.php";
include "connect.php";


?>


<div data-role="content" class="ui-content">
    <h3>Apa yang kau rasakan?</h3>
    <form method="post" action="commentsave.php">
        <textarea name="isi"></textarea>
        <input class="ui-btn ui-btn-b" data-role="input" type="submit" value="Bagikan" data-theme="b">
    </form>


    <div class="ui-panel-wrapper"   style="border-radius: 4px">
        <div data-role="main" class="ui-content">

            <?php
            $sql = $koneksi->prepare("SELECT * FROM komentar ORDER BY id ASC ");
            $sql->execute(); //query jika filter dipilih
            $no = 0;
            $no++;// mewakili data dari nomor 1
            while ($data = $sql->fetch()) {
            ?>

            <div class="">
                <div class="ui-bar-f custom-corners"><?php echo $data['nama']; ?></div>
                <div class="ui-body ui-body-f">

                    <label><?php echo $data['isi']; ?></label>

                </div>

                <br>
            </div>
            <?php }
            $no++;
            ?>
        </div>

    </div>

</div>
<?php include "footer.php" ?>
