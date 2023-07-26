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

// Jika Button Submit Pada Form di Klik Maka akan Menjalankan Function Dibawah
if (isset($_POST["submit"])) {
    if (addProduct($_POST) > 0) {
        $_SESSION["berhasil"] = "Data Berhasil Ditambahkan !!!";
    } else {
        $_SESSION["gagal"] = "Data Gagal Ditambahkan !!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Add New Product" ?>
    <?php include("partials/Head-admin.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php $heading = "Add New Product" ?>
        <?php include("partials/Sidebar.php"); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("partials/TopNavBar.php"); ?>
                <div class="container-fluid">
                    <!-- Message Alert Bootstrap -->
                    <div class="mx-5 my-4">
                        <?php if (isset($_SESSION["berhasil"])): ?>
                            <div class='alert alert-success mb-n2 myAlert mx-auto' role='alert'>
                                <?= $_SESSION["berhasil"] ?>
                                <?php unset($_SESSION["berhasil"]) ?>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION["gagal"])): ?>
                            <div class='alert alert-danger mb-n2 myAlert mx-auto' role='alert'>
                                <?= $_SESSION["gagal"] ?>
                                <?php unset($_SESSION["gagal"]) ?>
                            </div>
                        <?php endif ?>

                        <!-- Error Untuk Gambar -->
                        <?php if (isset($_SESSION['errSelectImg'])): ?>
                            <div class="alert alert-danger mt-3 mb-n2 myAlert mx-auto" role="alert">
                                <?= $_SESSION['errSelectImg'] ?>
                                <?php unset($_SESSION['errSelectImg']); ?>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['errTrueFormat'])): ?>
                            <div class="alert alert-danger mt-3 mb-n2 myAlert mx-auto" role="alert">
                                <?= $_SESSION['errTrueFormat'] ?>
                                <?php unset($_SESSION['errTrueFormat']); ?>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['errImgSize'])): ?>
                            <div class="alert alert-danger mt-3 mb-n2 myAlert mx-auto" role="alert">
                                <?= $_SESSION['errImgSize'] ?>
                                <?php unset($_SESSION['errImgSize']); ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- End Message Alert Bootstrap -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
                        </div>
                        <!-- Add Product -->
                        <div class="card-body">
                            <form action="" method="post" class="newData" enctype="multipart/form-data">
                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="carName">Car Name</label>
                                    <input type="text" class="form-control" name="name" id="carName"
                                        placeholder="Enter email" autocomplete="off" required>
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="year">Year</label>
                                    <input type="text" class="form-control" name="year" id="year"
                                        placeholder="Enter Year" autocomplete="off" required>
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="type">Car Type</label>
                                    <input type="text" class="form-control" name="type" id="type"
                                        placeholder="Enter Car Type" autocomplete="off" required>
                                    <small id="type" class="form-text text-muted">
                                        e.g. "S M/T"
                                    </small>
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" id="price"
                                        placeholder="Enter Price" autocomplete="off" required>
                                    <small id="price" class="form-text text-muted">
                                        e.g. "200000000".
                                    </small>
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="formFileSm" class="form-label">Insert Image Product</label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="image"
                                        type="file">
                                </div>

                                <button type="submit" name="submit"
                                    class="btn btn-primary mt-3 form-group mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    Submit
                                </button>
                            </form>
                        </div>
                        <!-- End Add Product -->
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