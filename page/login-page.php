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

<div class="container">
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#">
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
        <button type="submit" class="btn" onclick="window.location.href = 'payment-page.php';">Login</button>
        <div class="login-register">
            <p>Don't have an account? <a href="register-page.php" class="loginlink">Register</a></p>           
        </div>
        
        </form>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>