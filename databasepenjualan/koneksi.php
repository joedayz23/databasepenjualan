<?php
// koneksi.php

// Database configuration
$host = "localhost"; // Usually localhost
$user = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "northwind"; // Replace with your database name

// Create connection
$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally, set the character set to UTF-8
mysqli_set_charset($koneksi, "utf8");
?>