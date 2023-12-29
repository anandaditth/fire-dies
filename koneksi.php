<?php
$host = "localhost";
$user = "root";
$pass = "";
$name_db = "fire-dies";
$koneksi = mysqli_connect($host, $user, $pass, $name_db);

if (!$koneksi) {
    die("koneksi database gagal: " .mysqli_connect_error());
}
