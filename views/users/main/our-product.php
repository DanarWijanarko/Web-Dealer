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
    <?php $title = "Our Products"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->
    
    <!----------------------Our Product Start---------------------->
    <section class="our-product-content">
        <!-----------Honda Brio----------->
        <div class="product-card" data-aos="fade-up">
            <img src="Assets/img/brio/brio-ourProduct.png" alt="photo-card">
            <div class="card-text">
                <h1>New<br>Honda Brio Satya</h1>
                <p>
                    Mobil hatchback kompak, gaya modern, performa efisien dengan
                    mesin 1.2L i-VTEC. Cocok untuk perkotaan, fitur keselamatan
                    ABS, EBD, dual SRS airbag. Ruang kabin nyaman, desain interior
                    ergonomis. Pilihan ideal mobil ekonomis dan praktis.
                </p>
                <a href="/Web-Dealer/brio">
                    See More<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <!-----------Honda BR-V----------->
        <div class="product-card" data-aos="fade-up">
            <img src="Assets/img/brv/brv-ourProduct.png" alt="photo-card">
            <div class="card-text">
                <h1>All New<br>Honda BR-V</h1>
                <p>
                    Mobil SUV tangguh, dirancang petualangan. Desain kokoh,
                    mesin 1.5L i-VTEC responsif. Kapasitas tujuh penumpang,
                    kursi fleksibel. Fitur keselamatan dual airbag, ABS, EBD.
                    Desain interior modern, fitur canggih, pengalaman berkendara
                    menyenangkan. All New Honda BR-V, SUV tangguh dengan
                    kenyamanan dan kepraktisan.
                </p>
                <a href="/Web-Dealer/brv">
                    See More<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <!-----------Honda Civic----------->
        <div class="product-card" data-aos="fade-up">
            <img src="Assets/img/civic/civic-ourProduct.png" alt="photo-card">
            <div class="card-text">
                <h1>All New<br>Honda Civic Type R</h1>
                <p>
                    Mobil performa tinggi, gaya agresif dan aerodinamis.
                    Mesin turbo 2.0L, tenaga luar biasa. Suspensi khusus,
                    pengereman Brembo, kendali presisi. Desain interior
                    ergonomis dan sporty. Fitur canggih seperti sistem infotainment,
                    navigasi, konektivitas smartphone. Honda Civic Type R,
                    mobil cocok untuk penggemar kecepatan dan kecanggihan.
                </p>
                <a href="/Web-Dealer/civic">
                    See More<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <!-----------Honda CR-V----------->
        <div class="product-card" data-aos="fade-up">
            <img src="Assets/img/crv/crv-ourProduct.png" alt="photo-card">
            <div class="card-text">
                <h1>New<br>Honda CR-V</h1>
                <p>
                    SUV elegan, performa tangguh, desain modern dan aerodinamis.
                    Interior luas, nyaman, fitur canggih. Mesin bertenaga,
                    akselerasi responsif, efisiensi bahan bakar baik.
                    Fitur keselamatan canggih, kamera belakang.
                    All-Wheel Drive (AWD) opsional, traksi optimal.
                    Honda CR-V cocok untuk keluarga aktif dan petualang.
                </p>
                <a href="/Web-Dealer/crv">
                    See More<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <!-----------Honda HR-V----------->
        <div class="product-card" data-aos="fade-up">
            <img src="Assets/img/hrv/hrv-ourProduct.png" alt="photo-card">
            <div class="card-text">
                <h1>All New<br>Honda HR-V</h1>
                <p>
                    Crossover gaya modern, kepraktisan tinggi.
                    Desain aerodinamis, tegas, penampilan dinamis.
                    Interior lapang, ergonomis, fitur teknologi terbaru.
                    Mesin bertenaga, performa responsif, efisiensi bahan bakar baik.
                    Fitur keselamatan canggih, kamera belakang, pencegahan tabrakan.
                    Desain interior fleksibel, kursi belakang dilipat,
                    ruang penyimpanan luas. All New Honda HR-V,
                    mobil serbaguna siap untuk menghadapi berbagai petualangan.
                </p>
                <a href="/Web-Dealer/hrv">
                    See More<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <!-----------Honda Mobilio----------->
        <div class="product-card" data-aos="fade-up">
            <img src="Assets/img/mobilio/mobilio-ourProduct.png" alt="photo-card">
            <div class="card-text">
                <h1>New<br>Honda Mobilio</h1>
                <p>
                    MPV kenyamanan dan kepraktisan sehari-hari.
                    Desain modern, ruang luas, fleksibilitas optimal.
                    Fitur terkini, kenyamanan penumpang.
                    Interior lapang, muat tujuh penumpang.
                    Mesin bensin efisien, performa tangguh.
                    Fitur keselamatan dual airbag, ABS, EBD.
                    Ruang kargo luas, kursi belakang melipat.
                    Teknologi canggih sistem infotainment, koneksi Bluetooth.
                    New Honda Mobilio, kendaraan keluarga nyaman, serbaguna, handal.
                </p>
                <a href="/Web-Dealer/mobilio">
                    See More<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!----------------------Our Product End---------------------->

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