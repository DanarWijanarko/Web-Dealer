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
    <?php $title = "Our Product - New Honda Brio Satya"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Img Slider Star---------------------->
    <section class="img_slider" data-aos="zoom-in">
        <div class="slide">
            <img src="Assets/img/brio/brio-seeMore-slide1.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/brio/brio-seeMore-slide2.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/brio/brio-seeMore-slide3.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/brio/brio-seeMore-slide4.jpg">
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
                <img src="Assets/img/brio/brio-inter1.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter2.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter3.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter4.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter5.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter6.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter7.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter8.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brio/brio-inter9.jpg">
            </div>
        </div>
        <div class="gallery-popup-img">
            <span><i class="fas fa-xmark"></i></span>
            <img src="">
        </div>
    </section>
    <!----------------------Gallery End---------------------->
    
    <!----------------------Car Type Start---------------------->
    <section class="car-type" id="car-type">
        <h1>Car Type</h1>
        <div class="car-type-content" data-aos="fade-up">
            <!-- Honda Brio Satya S M/T -->
            <div class="car-type-card">
                <h5>1/3</h5>
                <img src="Assets/img/brio/brio-car-type-smt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2 style="font-size: 35px;">Honda Brio Satya S M/T</h2>
                    <ul>
                        <li>1.2L i-VTEC 90PS with 4 cylinder</li>
                        <li>5 M/T</li>
                        <li>Digital A/C</li>
                        <li>Chrome Front Grille</li>
                        <li>14" Trim Wheels</li>
                        <li>Black & Gray Interior Color with New Fabric Seat Pattern</li>
                        <li>Auto Up/Down Windows with Anti Pinch</li>
                        <li>2nd Row Adjustable Headrest</li>
                        <li>Tilt Steering</li>
                        <li>Electric Power Seeting</li>
                        <li>ABS + EBD</li>
                        <li>Parking Sensor</li>
                    </ul>
                    <h3>Rp 165.900.000</h3>
                </div>
            </div>
            <!-- Honda Brio Satya E CVT -->
            <div class="car-type-card">
                <h5>2/3</h5>
                <img src="Assets/img/brio/brio-car-ecvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2 style="font-size: 35px;">Honda Brio Satya E CVT</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe S, ditambah :</p>
                        <li>Headlamp with LED DRL</li>
                        <li>14" Two Tone Alloy Wheels</li>
                        <li>Rear Wiper</li>
                        <li>Audio Steering Switch with Illumination</li>
                        <li>Auto Door Lock by Speed</li>
                        <li>Alarm System</li>
                        <li>Shifter Illumination</li>
                    </ul>
                    <h3>Rp 191.900.000</h3>
                </div>
            </div>
            <!-- Honda Brio Satya RS CVT -->
            <div class="car-type-card">
                <h5>3/3</h5>
                <img src="Assets/img/brio/brio-car-type-rscvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2 style="font-size: 35px;">Honda Brio Satya RS CVT</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe E, ditambah :</p>
                        <li>LED Headlights with LED Day Running Light</li>
                        <li>Dark Chrome Front Grille with New RS Emblem</li>
                        <li>LED Fog Lights</li>
                        <li>One Push Ignition System</li>
                        <li>Smart Entry System</li>
                        <li>1st Row Adjustable Headrest</li>
                        <li>Power Retractable Door Mirror with LED Turning Signal</li>
                        <li>15" Dark Chrome Alloy Wheels</li>
                        <li>Smoked Rear Combi Lamp</li>
                        <li>Black Color Interior with Orange Stitch</li>
                        <li>Tailgate Spoiler with LED High Mount Stop Lamp</li>
                        <li>Rear Bumper with Diffuser</li>
                        <li>Sporty Dashboard Panel Pattern with Red & Gray Lining</li>
                        <li>Sporty Meter Cluster with Multi Information LCD Display</li>
                        <li>7" Advanced Capacitive Touchscreen Display Audio with USB Port, AM/FM Radio, Bluetooth & HFT, Screen Mirroring, and Smartphone Connection</li>
                        <li>Tweeter Speakers</li>
                    </ul>
                    <h3>Rp 243.900.000</h3>
                </div>
            </div>
        </div>
        <a class="prev" id="prev" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></a>
        <a class="next" id="next" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></a>
        <script>
            let slideIndex = 0;
            showSlide(slideIndex);

            function changeSlide(n) {
                showSlide((slideIndex += n));
            }

            function showSlide(n) {
                const slides = document.getElementsByClassName("car-type-card");

                // Kembali ke slide pertama jika mencapai slide terakhir
                if (n >= slides.length) {
                    slideIndex = 0;
                }

                // Kembali ke slide terakhir jika mencapai slide pertama
                if (n < 0) {
                    slideIndex = slides.length - 1;
                }

                // Sembunyikan semua slide
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                // Tampilkan slide yang sedang aktif
                slides[slideIndex].style.display = "block";
            }
        </script>
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