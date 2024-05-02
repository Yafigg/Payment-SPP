<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login Page</title>
<source src="../Asset/Goku.mp4" type="video/mp4">
<link rel="stylesheet" href="../style/login-page.css">

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

<?php session_start();
include "../connection/Connection.php";
?>
    
<form method="post">
    <div class="container">
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#">
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
        <button name="login" type="submit" class="btn" required onclick="return checkForm();">Login</button>
        <script>
            function checkForm() {
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;

                if (email.trim() === '' || password.trim() === '') {
                    alert('Form Is Empty');
                    return false; // Mengembalikan false untuk mencegah pengiriman form
                }

                return true; // Mengembalikan true untuk melanjutkan pengiriman form
            }
        </script>

        <div class="login-register">
            <p>Don't have an account? <a href="register-page.php" class="loginlink">Register</a></p>           
        </div>
        
        </form>
    </div>
</div>
</form>

<?php
    // Memeriksa apakah form login telah disubmit
    if(isset($_POST['login'])){
        // Mendapatkan email dan password dari form
        $mail = $_POST['email'];
        $pwd = $_POST['password'];

        $qry = $conn->query("SELECT * FROM siswa WHERE email='$mail' AND password='$pwd'");
        $result = mysqli_num_rows($qry);

        if($result == 1) {
            $data = $qry->fetch_assoc();

            $_SESSION['email'] = $data;
            echo "<script>alert('Login Successful');
            location.href='home-page.php' ;</script>";
        } else {
            // Jika tidak, maka tampilkan pesan kesalahan dan arahkan kembali ke halaman login
            echo "<script>alert('Account Not Found, Make Sure Again Your Account');
            location.href='register-page.php' ;</script>";
        } 
    }
?>




<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>