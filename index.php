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
<h2 align="center">Selamat Datang di<br> Buku Angkatan Online </h2>

            <div class="ui-corner-all">
                <div class="ui-bar-a custom-corners"><center>Login</center></div>
                <div class="ui-body ui-body-a">
            <form method="post" action="">
                <label>NIM</label>
                <input class="ui-input-text" type="text" name="nim">
                <label>Password</label>
                <input type="password" name="username">
                <input class="ui-btn ui-btn-b" data-role="input" type="submit" value="Login" data-theme="b">
            </form> Belum memiliki akun? klik <a href="signup.php" style="color: seagreen" data-transition="slide">disini</a>
                </div>

            </div>
        </div>
    </div>
</div>
