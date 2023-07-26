<?php

// Jika "User" Belum Login Akan Diarahkan ke Halaman Login.
if (!isset($_SESSION["level"])) {
    header("Location: /Web-Dealer/login");
    exit;
}

// Submit For Chat Form
if (isset($_POST["submit"])) {
    if (message($_POST) > 0) {
        echo "
            <script>
                alert('Pesan Berhasil Dikirim!')
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Pesan Gagal Dikirim!')
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Our Product - All New Honda Civic Type R"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Img Slider Star---------------------->
    <section class="img_slider" data-aos="zoom-in">
        <div class="slide">
            <img src="Assets/img/civic/civic-seeMore-Slide1.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/civic/civic-seeMore-Slide2.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/civic/civic-seeMore-Slide3.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/civic/civic-seeMore-Slide4.jpg">
        </div>
        <div class="dot-class">
            <span class="dot" onclick="currentImg(1)">
                <i class="far fa-dot-circle"></i>
            </span>
            <span class="dot" onclick="currentImg(2)">
                <i class="far fa-dot-circle"></i>
            </span>
            <span class="dot" onclick="currentImg(3)">
                <i class="far fa-dot-circle"></i>
            </span>
            <span class="dot" onclick="currentImg(4)">
                <i class="far fa-dot-circle"></i>
            </span>
        </div>
    </section>
    <!----------------------Img Slider End---------------------->

    <!----------------------Gallery Start---------------------->
    <section class="gallery">
        <h1 data-aos="zoom-in">Interior</h1>
        <div class="gallery-img-content">
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter1.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter2.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter3.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter4.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter5.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter6.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter7.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter8.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/civic/civic-inter9.jpg">
            </div>
        </div>
        <div class="gallery-popup-img">
            <span><i class="fas fa-xmark"></i></span>
            <img src="">
        </div>
    </section>
    <!----------------------Gallery End---------------------->
    
    <!----------------------Car Type Start---------------------->
    <section class="car-type">
        <h1>Car Type</h1>
        <div class="car-type-content" data-aos="fade-up">
            <div class="car-type-card">
                <img src="Assets/img/civic/civic-car-type.png" alt="photo-card"
                style="margin: 15px 0;">
                <div class="car-type-text">
                    <h2>All New Honda Civic Type R 6 M/T</h2>
                    <ul>
                        <li>2.0L Turbocharged Engine 319 PS</li>
                        <li>6 M/T</li>
                        <li>4-mode Driving System</li>
                        <li>19" Sport Wheels With 2 Front Brembo Calipers</li>
                        <li>10,2" Interactive TFT Meter Cluster</li>
                        <li>Honda LogR Datalogger System</li>
                        <li>Honda SENSING</li>
                        <li>8 Airbags</li>
                        <li>Triple Exhaust System</li>
                    </ul>
                    <h3>Rp 1.399.000.000</h3>
                </div>
            </div>
        </div>
    </section>
    <!----------------------Car Type End---------------------->
    
    <!----------------------Footer Start---------------------->
    <?php include("partials/Footer.php") ?>
    <!----------------------Footer End---------------------->

    <!----------------------Live Chat Start---------------------->
    <?php include("partials/ChatForm.php") ?>
    <!----------------------Live Chat End---------------------->

    <!----------------------Back To Top Start---------------------->
    <div class="backtotop" data-aos="fade-up">
        <button id="backtotop" onclick="toTop()">
            <i class="fas fa-angle-up"></i>
        </button>
    </div>
    <!----------------------Back To Top End---------------------->

    <!----------------------Library AOS Start---------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 10,
            duration: 300,
        });
    </script>
    <!----------------------Library AOS End---------------------->
</body>
</html>