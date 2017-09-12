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
                    <form method="post" action="">
                        <label>NIM</label>
                        <input class="ui-input-text" type="text" name="nim">
                        <label>Nama</label>
                        <input type="text" name="username">
                        <label>email</label>
                        <input type="email" name="username">
                        <label>Program Studi</label>
                        <select>
                            <option>S1 Pend. Teknologi Innformasi</option>
                            <option>S1 Teknolosi Informasi</option>
                            <option>S1 Sistem Informasi</option>
                            <option>D3 Manajemen Informatika</option>
                        </select>
                        <label>Password</label>
                        <input type="password" name="username">
                        <input class="ui-btn ui-btn-b" data-role="input" type="submit" value="Daftar" data-theme="b">
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
