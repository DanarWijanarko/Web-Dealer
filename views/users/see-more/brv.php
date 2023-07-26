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
    <?php $title = "Our Product - All New Honda BR-V"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Img Slider Star---------------------->
    <section class="img_slider" data-aos="zoom-in">
        <div class="slide">
            <img src="Assets/img/brv/brv-seeMore-slide1.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/brv/brv-seeMore-slide2.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/brv/brv-seeMore-slide3.jpg">
        </div>
        <div class="slide">
            <img src="Assets/img/brv/brv-seeMore-slide4.jpg">
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
                <img src="Assets/img/brv/brv-inter1.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter2.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter3.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter4.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter5.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter6.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter7.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter8.jpg">
            </div>
            <div class="images" data-aos="fade-up">
                <img src="Assets/img/brv/brv-inter9.jpg">
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
            <!-- All New Honda BR-V S M/T -->
            <div class="car-type-card">
                <h5>1/4</h5>
                <img src="Assets/img/brv/brv-car-type-smt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda BR-V S M/T</h2>
                    <ul>
                        <li>1.5L DOHC i-VTEC Engine 121 PS</li>
                        <li>ABS + EBD</li>
                        <li>16" Trim Wheels</li>
                        <li>LED Headlamp with LED DRL</li>
                        <li>7" Touchscreen Display Audio with Smartphone Connection</li>
                        <li>HSA</li>
                        <li>VSA</li>
                    </ul>
                    <h3>Rp 287.800.000</h3>
                </div>
            </div>
            <!-- All New Honda BR-V E CVT -->
            <div class="car-type-card">
                <h5>2/4</h5>
                <img src="Assets/img/brv/brv-car-type-ecvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda BR-V E CVT</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe S, ditambah :</p>
                        <li>16" Alloy Wheels</li>
                        <li>Led Foglight</li>
                        <li>Smart Entry System</li>
                        <li>Walk-Away Auto Lock</li>
                        <li>TFT Meter</li>
                        <li>2nd Row Accessories Power Outlet</li>
                        <li>Remote Engine Start (E CVT Only)</li>
                    </ul>
                    <h3>Rp 312.000.000</h3>
                </div>
            </div>
            <!-- All New Honda BR-V Prestige CVT -->
            <div class="car-type-card">
                <h5>3/4</h5>
                <img src="Assets/img/brv/brv-car-type-prescvt.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda BR-V Prestige CVT</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe E CVT, ditambah :</p>
                        <li>Auto Foldable Side Door Mirror with LED Turning Signal</li>
                        <li>17" Alloy Wheel</li>
                        <li>2nd Row Armrest Console</li>
                        <li>3rd Row Accessories Power Outlet</li>
                        <li>Leather Seat</li>
                    </ul>
                    <h3>Rp 335.000.000</h3>
                </div>
            </div>
            <!-- All New Honda BR-V Prestige with Honda Sensing -->
            <div class="car-type-card">
                <h5>4/4</h5>
                <img src="Assets/img/brv/brv-car-type-presSensing.png" alt="photo-card">
                <div class="car-type-text">
                    <h2>All New Honda BR-V Prestige with Honda Sensing</h2>
                    <ul>
                        <p>Memiliki semua fitur di tipe Perstige CVT, ditambah :</p>
                        <li>Honda SENSING</li>
                        <li>Honda LaneWatch™</li>
                    </ul>
                    <h3>Rp 355.000.000</h3>
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