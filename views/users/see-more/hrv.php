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
    <?php $title = "Our Product - All New Honda HR-V"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Img Slider Star---------------------->
    <section class="img_slider" data-aos="zoom-in">
        <div class="slide">
            <img src="Assets/img/hrv/hrv-seeMore-slide1.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/hrv/hrv-seeMore-slide2.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/hrv/hrv-seeMore-slide3.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/hrv/hrv-seeMore-slide4.jpg">
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
                <img src="Assets/img/hrv/hrv-inter1.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter2.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter3.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter4.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter5.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter6.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter7.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter8.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/hrv/hrv-inter9.jpg">
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
            <!-- All New Honda HR-V S CVT -->
            <div class="car-type-card">
                <h5>1/4</h5>
                <img src="Assets/img/hrv/hrv-car-type-scvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda HR-V S CVT</h2>
                    <ul>
                        <li>1.5L DOHC i-VTEC Engine (Power 121 PS, Torque 145Nm)</li>
                        <li>Honda Sensing</li>
                        <li>Full LED Headlights with LED DRL</li>
                        <li>17" Alloy Wheels</li>
                        <li>4.2" Interactive TFT Meter Cluster</li>
                        <li>7" Touchscreen Display Audio with Smartphone Connection</li>
                        <li>Walk Away Auto Lock</li>
                        <li>Rear Seat Reminder</li>
                        <li>Hill Start Assist (HSA)</li>
                        <li>Hill Descent Control (HDC)</li>
                        <li>Vehicle Stability Assist (VSA)</li>
                        <li>ABS + EBD + BA</li>
                        <li>EPB + ABH</li>
                        <li>4 Speakers</li>
                    </ul>
                    <h3>Rp 375.900.000</h3>
                </div>
            </div>
            <!-- All New Honda HR-V E CVT -->
            <div class="car-type-card">
                <h5>2/4</h5>
                <img src="Assets/img/hrv/hrv-car-type-ecvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda HR-V E CVT</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe S, ditambah :</p>
                        <li>Remote Engine Start</li>
                        <li>Painted Fog & Bumper Garnish</li>
                        <li>Paddle Shift</li>
                        <li>Auto Foldable Door Mirror with LED Turning Signal</li>
                        <li>2nd Row Accessories Power Outlet</li>
                        <li>Leather-Fabric Combi Seat</li>
                        <li>Half Leather Steering</li>
                        <li>Leather Shift Knob</li>
                        <li>Rear A/C Ventilation</li>
                        <li>Rear Seat Armrest with Cup Holder</li>
                    </ul>
                    <h3>Rp 395.900.000</h3>
                </div>
            </div>
            <!-- All New Honda HR-V SE CVT -->
            <div class="car-type-card">
                <h5>3/4</h5>
                <img src="Assets/img/hrv/hrv-car-type-secvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda HR-V SE CVT</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe E CVT, ditambah :</p>
                        <li>Sequential LED Turning Signal</li>
                        <li>Panoramic Glass Roof</li>
                        <li>LED Fog Lights</li>
                        <li>18" Sporty Alloy Wheels</li>
                        <li>Piano Black Power Window Panel</li>
                        <li>8" Capacitive Touchscreen Display Audio</li>
                        <li>Honda Lanewatch™</li>
                        <li>Electrostatic LED Map Light</li>
                        <li>Multi-Angle Rear View Camera</li>
                    </ul>
                    <h3>Rp 416.100.000</h3>
                </div>
            </div>
            <!-- All New Honda HR-V TURBO RS -->
            <div class="car-type-card">
                <h5>4/4</h5>
                <img src="Assets/img/hrv/hrv-car-type-turbo.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda HR-V TURBO RS</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe SE, ditambah :</p>
                        <li>1.5L VTEC Turbo Engine (Power 177PS, Torque 240Nm)</li>
                        <li>Stylish RS Aero Kit</li>
                        <li>Dual Exhaust Pipe Finisher</li>
                        <li>Stylish Black Interior and Leather-Trimmed with Red Stitches</li>
                        <li>Door Upper Soft Pad</li>
                        <li>Leather-Wrapped Steering Wheel</li>
                        <li>7" Interactive TFT Meter Cluster with Customized Display Setting</li>
                        <li>4 Speakers + 2 Tweeter</li>
                        <li>3-Mode Drive System (Sport, Normal, ECON)</li>
                        <li>Hands-Free Access Power Tailgate + Walk-Away Close</li>
                        <li>6 Airbags</li>
                    </ul>
                    <h3>Rp 529.900.000</h3>
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