<?php
include "complement.php";?>

<div data-role="header" data-position="fixed" data-theme="c">

<!--    <a href="#cari"  class="ui-btn ui-icon-search ui-btn-icon-left">Logo</a>-->

    <h1>Buku Angkatan</h1>
<!---->
<!--    <a href="#user" data-rel="popup" class="ui-btn ui-icon-bars ui-btn-icon-left">Hi, Nama.</a>-->

    <div data-role="popup" id="cari" class="ui-content">
        <form method="get" action="">
            <input type="text" name="cari" placeholder="Cari Teman"><button class="ui-btn ui-btn-inline" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div data-role="popup" id="user" class="ui-content">
        <ul data-role="listview">
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

</div>
