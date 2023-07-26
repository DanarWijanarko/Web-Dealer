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

// Query Show Data "Product List"
$productList = showData("SELECT * FROM productlist");

// Buttom For Search
if (isset($_POST["search"])) {
    $productList = searchData('productlist', $_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Products List"; ?>
    <?php include("partials/Head-users.php"); ?>
</head>
<body>
    <!----------------------Navigation Bar Start---------------------->
    <?php include("partials/NavBar.php") ?>
    <!----------------------Navigation Bar End---------------------->

    <!----------------------Table Start---------------------->
    <section class="products" data-aos="zoom-in">
        <h1>Product List</h1>

        <form action="" method="post">
            <input type="text" name="keyword" autocomplete="off"
            placeholder="Search Product by Name Here...">
            <button type="submit" name="search">
                <i class="fa fa-search"></i>
            </button>
        </form>
        
        <table>
            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Car Name</th>
                <th>Year</th>
                <th>Type</th>
                <th>Harga</th>
            </tr>
            <?php
            $i = 1;
            foreach ($productList as $list): ?>
                <tr>
                    <td id="num">
                        <?= $i; ?>.
                    </td>
                    <td id="img">
                        <img src="<?= "Assets/Upload/" . $list["image"]; ?>">
                    </td>
                    <td>
                        <?= $list["name"]; ?>
                    </td>
                    <td id="year">
                        <?= $list["year"]; ?>
                    </td>
                    <td>
                        <?= $list["type"]; ?>
                    </td>
                    <td>
                        <?= "Rp. " . number_format($list["price"]); ?>
                    </td>
                </tr>
                <?php $i++;
            endforeach ?>
            <?php if ($productList == false) : ?>
                <tr>
                    <td colspan="6" id="no-data">
                        Maaf Nama Yang Anda Cari Tidak Tersedia.
                    </td>
                </tr>
            <?php endif ?>
            
        </table>

    </section>
    <!----------------------Table End---------------------->

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