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
    <?php $title = "About"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->
    <!----------------------About Desc Start---------------------->
    <section class="about-desc">
        <div class="about-text"  data-aos="fade-right">
            <h1>About Us.</h1>
            <p>
                Nar AutoCars is a leading digital marketplace
                and solutions provider for the automotive
                industry that connects car shoppers with sellers.
                Launched in 2020 and headquartered in Surabaya,
                the Company empowers shoppers with the data,
                resources and digital tools needed to make
                informed buying decisions and seamlessly
                connect with automotive retailers. In a rapidly
                changing market, an innovative technology
                company building solutions that future-proof
                dealerships with more efficient operations,
                a faster and easier car buying process.
            </p>
        </div>
        <div class="about-logo"  data-aos="fade-left">
            <img src="Assets/img/logo-favicon.png">
        </div>
    </section>
    <!----------------------About Desc End---------------------->

    <!----------------------Our Team Start---------------------->
    <section class="our-team">
        <h1>Our Team</h1>
        <div class="our-team-content" data-aos="zoom-in" data-aos="fade-up">
            <div class="photo-card">
                <img src="Assets/img/team/rey.jpg">
                <h4>Reynanda Shaquille P.</h4>
                <h5>1202210033</h5>
            </div>
            <div class="photo-card">
                <img src="Assets/img/team/nar.png">
                <h4 style="color: #0ef6cc;">Widi Pangestu Danar W.</h4>
                <h5 style="color: #0ef6cc;">1202212018</h5>
            </div>
        </div>
        <div class="our-team-content" data-aos="fade-up">
            <div class="photo-card">
                <img src="Assets/img/team/aurey.jpg">
                <h4>Aurey Farel P.</h4>
                <h5>1202210035</h5>
            </div>
        </div>
        <div class="our-team-content" data-aos="fade-up">
            <div class="photo-card">
                <img src="Assets/img/team/budi.jpg">
                <h4>Priambudi Agustian</h4>
                <h5>1202210038</h5>
            </div>
            <div class="photo-card" data-aos="fade-up">
                <img src="Assets/img/team/ghozyan.jpg">
                <h4>Ghozyan Hilman K.</h4>
                <h5>1202210004</h5>
            </div>
        </div>
    </section>
    <!----------------------Our Team End---------------------->

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