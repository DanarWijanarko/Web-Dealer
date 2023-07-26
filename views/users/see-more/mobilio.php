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
    <?php $title = "Our Product - New Honda Mobilio"; ?>
    <?php include("partials/Head-users.php"); ?>    
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Img Slider Star---------------------->
    <section class="img_slider" data-aos="zoom-in">
        <div class="slide">
            <img src="Assets/img/mobilio/mobilio-seeMore-slide1.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/mobilio/mobilio-seeMore-slide2.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/mobilio/mobilio-seeMore-slide3.jpg">
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
        </div>
    </section>
    <!----------------------Img Slider End---------------------->

    <!----------------------Gallery Start---------------------->
    <section class="gallery">
        <h1 data-aos="zoom-in">Interior</h1>
        <div class="gallery-img-content">
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter1.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter2.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter3.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter4.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter5.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter6.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter7.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/mobilio/mobilio-inter8.jpg">
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
                <img src="Assets/img/mobilio/mobilio-car-type.png" alt="photo-card"
                style="margin: 15px 0;">
                <div class="car-type-text">
                    <h2>New Honda Mobilio S M/T</h2>
                    <ul>
                        <li>1.5L SOHC i-VTEC Engine 118PS</li>
                        <li>5 M/T</li>
                        <li>15" Trimmed Wheel</li>
                        <li>Halogen Headlamp</li>
                        <li>Double Din Audio with Bluetooth & Hands-Free Telephone</li>
                        <li>One Touch Tumble 2nd Row Seat</li>
                        <li>Power Window</li>
                    </ul>
                    <h3>Rp 235.900.000</h3>
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