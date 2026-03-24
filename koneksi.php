<?php
$conn = mysqli_connect("localhost", "root", "", "web_portofolio");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
