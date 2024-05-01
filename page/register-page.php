<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register Page</title>
<source src="../Asset/Goku.mp4" type="video/mp4">
<link rel="stylesheet" href="../style/registerpage.css">

<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet" />

</head>
<body>

<video autoplay loop muted plays-inline class="background-clip">
        <source src="../Asset/Goku.mp4" type="video/mp4">
    </video>

<div class="container">
    <div class="form-box login">
        <h2>Register</h2>
        <form action="#">
            <div class="input-box">
            <span class="icon"><ion-icon name="card"></ion-icon></span>
            <input type="nis" required>
            <label>NIS</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="fullname" required>
            <label>Nama Lengkap</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" required>
            <label>Password</label>
        </div>
        <div class="input">
            <label><input type="checkbox">I Agree To The Terms & Condittions</label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login">
            <p>Already have an account? <a href="login-page.php" class="loginlink">Login</a></p>           
        </div>

        
        </form>
    </div>
</div>

<?php
require '../connection/Connection.php'; // Menghubungkan dengan file Connection.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['signup'])) {
        // Query untuk memasukkan data ke database
        $sql = "INSERT INTO siswa (nis, nama_lengkap, email, password) VALUES ('$nis', '$fullname', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>New record created successfully</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    } elseif (isset($_POST['signin'])) {
        // Query untuk mengecek data di database
        $sql = "SELECT * FROM siswa WHERE nis='$nis' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<p>Login successful</p>";
        } else {
            echo "<p>Invalid NIS or password</p>";
        }
    }
}

$conn->close();
?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>