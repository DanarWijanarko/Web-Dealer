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
    <?php $title = "Our Product - New Honda CR-V"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Img Slider Star---------------------->
    <section class="img_slider" data-aos="zoom-in">
        <div class="slide">
            <img src="Assets/img/crv/crv-seeMore-slide1.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/crv/crv-seeMore-slide2.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/crv/crv-seeMore-slide3.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/crv/crv-seeMore-slide4.jpg">
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
                <img src="Assets/img/crv/crv-inter1.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter2.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter3.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter4.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter5.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter6.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter7.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter8.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/crv/crv-inter9.jpg">
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
            <!-- New Honda CR-V 2.0L i-VTEC -->
            <div class="car-type-card">
                <h5>1/4</h5>
                <img src="Assets/img/crv/crv-car-type-vtec.png" alt="photo-card"
                style="margin: 15px 0;">
                <div class="car-type-text">
                    <h2>New Honda CR-V 2.0L i-VTEC</h2>
                    <ul>
                        <li>2.0L SOHC i-VTEC Engine 154PS</li>
                        <li>CVT with Earth Dreams Technology</li>
                        <li>18" Alloy Wheel</li>
                        <li>7" Touchscreen Display Audio</li>
                        <li>Full LED Headlamp with Daytime Running Light</li>
                        <li>LED Fog Light Rounded</li>
                        <li>HFT Switch</li>
                        <li>6 Airbags</li>
                        <li>Cruise Control</li>
                        <li>HSA + VSA</li>
                    </ul>
                    <h3>Rp 525.300.000</h3>
                </div>
            </div>
            <!-- New Honda CR-V 1.5L Turbo -->
            <div class="car-type-card">
                <h5>2/4</h5>
                <img src="Assets/img/crv/crv-car-type-turbo.png" alt="photo-card"
                style="margin: 15px 0;">
                <div class="car-type-text">
                    <h2>New Honda CR-V 1.5L Turbo</h2>
                    <ul>
                        <li>1.5L DOHC VTEC Turbo Engine 190PS</li>
                        <li>CVT with Earth Dreams Technology</li>
                        <li>18" Bold Alloy Wheel</li>
                        <li>3 Row Seat</li>
                        <li>7" Touchscreen Monitor with Multi Angle Rear View Camera</li>
                        <li>Leather Seat, Steering, and Shift Knob</li>
                        <li>8-way Driver Power Seat Adjuster with Lumbar Support</li>
                        <li>Wood Panel Garnish Interior</li>
                        <li>Rain Sensing Windshield Wiper</li>
                    </ul>
                    <h3>Rp 606.300.000</h3>
                </div>
            </div>
            <!-- New Honda CR-V 1.5L Prestige Turbo -->
            <div class="car-type-card">
                <h5>3/4</h5>
                <img src="Assets/img/crv/crv-car-type-presTurbo.png" alt="photo-card"
                style="margin: 15px 0;">
                <div class="car-type-text">
                    <h2>New Honda CR-V 1.5L Prestige Turbo</h2>
                    <ul>
                        <li>1.5L DOHC VTEC Turbo Engine 190PS</li>
                        <li>CVT with Earth Dreams Technology</li>
                        <li>Power Panoramic Sunroof</li>
                        <li>Honda Sensing</li>
                        <li>Sequential LED Turning Signal</li>
                        <li>Remote Engine Start</li>
                        <li>Hands-Free Access Power Tailgate</li>
                        <li>Smart Key with Power Tailgate Button</li>
                        <li>Front Passenger 4-Way Power Seat Adjustment</li>
                    </ul>
                    <h3>Rp 669.600.000</h3>
                </div>
            </div>
            <!-- New Honda CR-V 1.5L Black Edition -->
            <div class="car-type-card">
                <h5>4/4</h5>
                <img src="Assets/img/crv/crv-car-type-black.png" alt="photo-card"
                style="margin: 15px 0;">
                <div class="car-type-text">
                    <h2>New Honda CR-V 1.5L Black Edition</h2>
                    <ul>
                        <li>1.5 L DOHC VTEC Turbo Engine 190 PS</li>
                        <li>CVT with Earth Dreams Technology</li>
                        <li>Honda Sensing</li>
                        <li>Sporty Black Alloy Wheels 18"</li>
                        <li>Smoked Headlight Extension</li>
                        <li>Black Edition Emblem</li>
                        <li>Full Black Cabin</li>
                        <li>Dual Chrome Exhaust Pipe with New Finisher Design</li>
                    </ul>
                    <h3>Rp 684.600.000</h3>
                </div>
            </div>
        </div>
        <a class="prev" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></a>
        <a class="next" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></a>
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