<?php

// Jika "Admin" Belum Login Akan Diarahkan ke Halaman Login
// Jika yang Login "Admin" maka Admin Dapat Masuk Ke Halaman Admin maupun User
// jika yang Login "User" maka User Tidak Akan Bisa Masuk Ke Halaman Admin
if ($_SESSION["level"] != "admin") {
    header("Location: /Web-Dealer/login");
    exit;
}

// Ambil Id Pada Saat Login Untuk Ditampilkan Account Information
$id = $_SESSION["id"];
// Show Data Account Information
$acc = showData("SELECT * FROM users WHERE id = '$id'")[0];

// Ambil Data dari URL
$getId = $_GET["id"];
// Query Data Berdasarkan ID,,,,, [0] Untuk Memanggil Array Index Untuk Bisa Memanggil Array Didalam index 0;
$productList = showData("SELECT * FROM productlist WHERE id= $getId")[0];

if (isset($_POST["submit"])) {
    if (editProduct($_POST) > 0) {
        $_SESSION["berhasilEdit"] = "Data Berhasil di Edit !!!";
        header("Location: /Web-Dealer/editProductList");
    } else {
        $_SESSION["gagalEdit"] = "Data Gagal di Edit !!!";
        header("Location: /Web-Dealer/editProductList");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Welcome Admin" ?>
    <?php include("partials/Head-admin.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php $heading = "Update Data" ?>
        <?php include("partials/Sidebar.php"); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("partials/TopNavBar.php"); ?>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update the Product</h6>
                        </div>
                        <!-- Update Product -->
                        <div class="card-body ">
                            <form action="" method="post" class="newData" enctype="multipart/form-data">
                                <!-- Edit Disini Adalah Mengambil Dulu Data yang Ada Didatabase,
                                    Jika Ada Data yang ingin Diganti Rubah Datanya Jika tidak Tidak Perlu Diganti
                                    id -> Agar Bisa Masuk Ke Database  -->
                                <input type="hidden" name="id" id="carid" value="<?= $productList['id'] ?>">
                                <!-- img -> untuk Memanggil Nama Gambar Lama Jika Diganti Akan Direplace Dengan
                                    Gambar Baru, Jika Tidak Tetap Menggunakan Nama Gambar Lama -->
                                <input type="hidden" name="oldImg" id="imgid" value="<?= $productList['image'] ?>">

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="carName">Car Name</label>
                                    <input type="text" class="form-control" name="name" id="carName"
                                        value="<?= $productList['name'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="year">Year</label>
                                    <input type="text" class="form-control" name="year" id="year"
                                        value="<?= $productList['year'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="type">Car Type</label>
                                    <input type="text" class="form-control" name="type" id="type"
                                        value="<?= $productList['type'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" id="price"
                                        value="<?= $productList['price'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="img">Edit Image</label>
                                    <img src="<?= 'Assets/Upload/' . $productList["image"] ?>"
                                        class="img-thumbnail rounded d-block my-2">
                                    <label for="formFileSm" class="form-label">
                                        Jika Ingin Mengganti Gambar Klik 'Choose File'
                                    </label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                                </div>

                                <button type="submit" name="submit"
                                    class="btn btn-primary mt-1 ml-xl-5 ml-lg-5 ml-md-5 ml-sm-5 mx-auto">
                                    Update Data
                                </button>
                                <a href="/Web-Dealer/editProductList" class="btn btn-primary mt-1">
                                    Cancel
                                </a>
                            </form>
                        </div>
                        <!-- End Update Product -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End container-fluid -->
            </div>
            <!-- End content -->
        </div>
        <!-- End content-wrapper -->
    </div>
    <?php include("partials/Modal.php"); ?>
    <?php include("partials/script-footer.php") ?>
</body>

</html>