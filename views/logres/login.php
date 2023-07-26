<?php

// Jika Sudah Login Fungsi ini akan Dijalankan.
if (isset($_SESSION["level"])) {
    if ($_SESSION["level"] == "admin") {
        header("Location: /Web-Dealer/productList-admin");
        exit;
    } else {
        header("Location: /Web-Dealer/");
        exit;
    }
}

// Submit For Function "login"
if (isset($_POST["login-btn"])) {
    // Jika Return di Jalankan Bernilai false Maka if false Akan di Jalankan
    if (!login($_POST)) {
        $_SESSION['invalid'] = "Username or Password Invalid !!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Login"; ?>
    <?php include("partials/Head-logres.php") ?>
</head>

<body>
    <section class="login-container" data-aos="zoom-in">
        <img src="Assets/img/civic/civic-seeMore-Slide1.jpg" alt="">
        <h1>Welcome to<br>Nar AutoCars</h1>
        <span class="login-text">Login</span>

        <!-- Message Alert Bootstrap -->
        <div class="notif">
            <!-- Jika Error di Jalankan dari Function Maka Pesan ini Akan Muncul -->
            <?php if (isset($_SESSION['invalid'])): ?>
                <div class="alert alert-danger mt-2 mb-n2" role="alert">
                    <?= $_SESSION['invalid'] ?>
                    <?php unset($_SESSION['invalid']) ?>
                </div>
            <?php endif ?>
        </div>
        <!-- End Message Alert Bootstrap -->

        <form action="" method="post">
            <div class="text-container">
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="Username" autocomplete="off" autofocus="on" required>
                <div class="under"></div>
            </div>
            <div class="text-container">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
                <div class="under"></div>
            </div>
            <button type="submit" name="login-btn" id="liveAlertBtn">Login</button>
        </form>
        <div class="no-acc">
            Don't Have an Account ?
            <a href="/Web-Dealer/register">Register Now!</a>
        </div>
    </section>

    <!----------------------Library AOS Start---------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 300,
        });
    </script>
    <!----------------------Library AOS End---------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>