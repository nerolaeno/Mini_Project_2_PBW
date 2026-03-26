<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "web_portofolio"; 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
