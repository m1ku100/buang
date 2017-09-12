<?php
/**
 * Created by PhpStorm.
 * User: Lab MMK
 * Date: 12/09/2017
 * Time: 16:08
 */

$host = "localhost";
$user = "root";
$password = "";
$database_name = "buang";// nama database
$pdo = new PDO("mysql:host=$host;dbname=$database_name;charset=utf8",
    $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>