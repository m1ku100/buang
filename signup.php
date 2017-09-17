<?php
include "complement.php";
include "device.php";
?>
<div data-role="page">
    <div data-role="header" data-position="fixed" data-theme="c">
        <h1><b>Buang JTiF</b></h1>

    </div>
    <div class="ui-panel-wrapper">
        <div data-role="main" class="ui-content">


            <div class="ui-corner-all">
                <div class="ui-bar-a custom-corners"><center>Daftar</center></div>
                <div class="ui-body ui-body-a">
                    <form method="post" action="signpro.php">
                        <label>NIM</label>
                        <input class="ui-input-text" type="text" name="nim">
                        <label>Nama</label>
                        <input type="text" name="nama">
                        <label>email</label>
                        <input type="email" name="email">
                        <label>Program Studi</label>
                        <select name="prodi">
                            <option value="S1 Pend. Teknologi Innformasi ">S1 Pend. Teknologi Innformasi</option>
                            <option value="S1 Teknologi Innformasi">S1 Teknologi Innformasi</option>
                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                            <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                        </select>
                        <label>Password</label>
                        <input type="password" name="password">
                        <input class="ui-btn ui-btn-b" data-role="input" type="submit" value="Daftar" data-theme="b">
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
