<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spp-payment_db";

    // Create Connection object
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Cek Kondisi
    // if (!$conn) {
    //     die("Connection Failed: " . mysqli_connect_error());
    // }
    // else {
    //     echo "Connection Berhasil";
    // }
?>