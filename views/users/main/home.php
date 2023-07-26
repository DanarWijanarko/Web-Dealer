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

$id = $_SESSION["id"];
$wel = showData("SELECT * FROM users WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Landing Page"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <div class="welcome">
        <span>Selamat Datang, <?= $wel['name'] ?></span>
    </div>
    
    <!----------------------Dashboard Start---------------------->
    <section class="dashboard">
        <div class="dashboard-content" data-aos="fade-right">
            <div class="dashboard-text">
                <h1>Find Your Dream<br>Cars Here</h1>
                <p>
                    Nar AutoCars is a business that sells new or used cars,
                    at the retail level, based on a dealership contract with
                    an automaker or its sales subsidiary.
                </p>
                <a href="/Web-Dealer/our-product">Our Product</a>
            </div>
        </div>
        <div class="dashboard-img" data-aos="fade-left">
            <img src="Assets/img/dashboard-img.png" alt="">
        </div>
    </section>
    <!----------------------Dashboard End---------------------->

    <!----------------------Video Start---------------------->
    <video data-aos="zoom-in" controls muted loop>
        <source src="Assets/video/civic.mp4" type="video/mp4">
    </video>
    <!----------------------Video End---------------------->

    <!----------------------Highlight Start---------------------->
    <section class="highlight">
        <h1 style="font-family: 'Poppins', sans-serif;">HIGHLIGHT</h1>
        <div class="highlight-content" data-aos="fade-up">
            <div class="highlight-card">
                <img src="Assets/img/civic/civic-home.jpg" alt="photo-card">
                <div class="highlight-text">
                    <span id="top">All New</span>
                    <span id="bot">Honda Civic Type R</span>
                    <a href="/Web-Dealer/civic">
                        See More<i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <a class="prev-home" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></a>
                <a class="next-home" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="highlight-card">
                <img src="Assets/img/hrv/hrv-home.jpg" alt="photo-card">
                <div class="highlight-text">
                    <span id="top">All New</span>
                    <span id="bot">Honda HR-V</span>
                    <a href="/Web-Dealer/hrv">
                        See More<i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <a class="prev-home" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></a>
                <a class="next-home" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <script>
            let slideIndex = 0;
            showSlide(slideIndex);

            function changeSlide(n) {
                showSlide((slideIndex += n));
            }

            function showSlide(n) {
                const slides = document.getElementsByClassName("highlight-card");

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
    <!----------------------Highlight End---------------------->
    
    <!----------------------Footer Start---------------------->
    <?php include("partials/Footer.php")?>
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