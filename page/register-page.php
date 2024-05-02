<?php 
include '../connection/connection.php';
if(isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $nis = mysqli_real_escape_string($conn, $nis);
    $email = mysqli_real_escape_string($conn, $email);
    
    
    //check register data
    $sqlCheck = "SELECT * FROM siswa WHERE nis = '".$nis."' OR email = '".$email."'";
    $resultCheck = mysqli_query($conn, $sqlCheck);

    if (mysqli_num_rows($resultCheck) >0) {
        echo "<script>alert('Account Has Been Registered');location.href='register-page.php';</script>";
    }
    else {
        $query = "INSERT INTO siswa (nis, nama_lengkap, email, password) VALUE ('$nis','$nama','$email','$password')";  

        $resultInsert = mysqli_query($conn, $query);

        if ($resultInsert) {
            echo "<script>alert('Register Succesfully');
            location.href='login-page.php' ;</script>";
        } else {
            echo "<script>alert('Register Failed');
            location.href='register-page.php' ;</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register Page</title>
<link rel="stylesheet" href="../style/registerpage.css">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

</head>
<body>

<video autoplay loop muted plays-inline class="background-clip">
    <source src="../Asset/Goku.mp4" type="video/mp4">
</video>

<div class="container">
    <div class="form-box login">
        <h2>Register</h2>
        <form action="register-page.php" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="card"></ion-icon></span>
                <input type="text" name="nis" required>
                <label>NIS</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="nama" required>
                <label>Nama Lengkap</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="input">
                <label><input type="checkbox">I Agree To The Terms & Conditions</label>
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
            <div class="login">
                <p>Already have an account? <a href="login-page.php" class="loginlink">Login</a></p>           
            </div>
        </form>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>