<?php

// Jika Sudah Register Fungsi ini akan Dijalankan.
if (isset($_SESSION["level"])) {
    if ($_SESSION["level"] == "admin") {
        header("Location: /Web-Dealer/productList-admin");
        exit;
    } else {
        header("Location: /Web-Dealer/");
        exit;
    }
}

// Submit For Function "register"
if (isset($_POST["register-btn"])) {
    // Jika Baris Pada Tabel > dari 0 Maka Berhasil Registrasi
    if (register($_POST) > 0) {
        $_SESSION['success'] = "Berhasil Melakukan Registrasi !!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Register"; ?>
    <?php include("partials/Head-logres.php") ?>
    <style>
        .login-container h1 {
            top: 8%;
            left: 50%;
            transform: translate(-50%, -8%);
        }

        .login-container span::after {
            width: 30px;
        }
    </style>
</head>

<body>
    <section class="login-container" data-aos="zoom-in">
        <img src="Assets/img/civic/civic-seeMore-Slide1.jpg" alt="">
        <h1>Welcome to<br>Nar AutoCars</h1>
        <span class="login-text">Sign Up</span>

        <!-- Message Alert Bootstrap -->
        <div class="notif">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success mt-2 mb-n2" role="alert">
                    <?= $_SESSION['success'] ?>
                    <a href="/Web-Dealer/login">OK</a>
                    <?php unset($_SESSION['success']); ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['errUser'])): ?>
                <div class="alert alert-danger mt-2 mb-n2" role="alert">
                    <?= $_SESSION['errUser'] ?>
                    <?php unset($_SESSION['errUser']); ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['errPass'])): ?>
                <div class="alert alert-danger mt-2 mb-n2" role="alert">
                    <?= $_SESSION['errPass'] ?>
                    <?php unset($_SESSION['errPass']); ?>
                </div>
            <?php endif ?>
        </div>
        <!-- End Message Alert Bootstrap -->

        <form action="" method="post">
            <div class="text-container">
                <i class="fa fa-user"></i>
                <input type="text" name="name" placeholder="Name" autocomplete="off" autofocus="on" required>
                <div class="under"></div>
            </div>
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
            <div class="text-container">
                <i class="fa fa-lock"></i>
                <input type="password" name="password2" placeholder="Retype Password" required>
                <div class="under"></div>
            </div>
            <button type="submit" name="register-btn">Sign Up</button>
        </form>
        <div class="no-acc">
            Have an Account ?
            <a href="/Web-Dealer/login">Login Now!</a>
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