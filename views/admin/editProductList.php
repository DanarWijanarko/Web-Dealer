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

// Show Data Product List
$productList = showData("SELECT * FROM productlist");

// Jika 'id' Sudah Ada Pada Url Jalankan Function Didalamnya
if (isset($_GET["id"])) {
    $getId = $_GET["id"];
    $queryImg = "SELECT * FROM productlist WHERE id= $getId";
    $query = "DELETE FROM productlist WHERE id = $getId";
    // Jika Data yang Terpengaruh Lebih dari 0 Maka Jalankan Function
    if (deleteDataNImg($query, $queryImg) > 0) {
        header("Location: /Web-Dealer/editProductList");
    } else {
        echo mysqli_connect_error();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Product"; ?>
    <?php include("partials/Head-admin.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php $heading = "Edit Product" ?>
        <?php include("partials/Sidebar.php"); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("partials/TopNavBar.php"); ?>
                <div class="container-fluid">
                    <!-- Message Alert Bootstrap -->
                    <div class="mx-5 my-4">
                        <?php if (isset($_SESSION["berhasilEdit"])): ?>
                            <div class="alert alert-success alert-dismissible fade show myAlert mx-auto" role="alert">
                                <?= $_SESSION["berhasilEdit"] ?>
                                <?php unset($_SESSION["berhasilEdit"]) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION["gagalEdit"])): ?>
                            <div class="alert alert-danger alert-dismissible fade show myAlert mx-auto" role="alert">
                                <?= $_SESSION["gagalEdit"] ?>
                                <?php unset($_SESSION["gagalEdit"]) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>

                        <!-- Error Untuk Gambar -->
                        <?php if (isset($_SESSION['errSelectImg'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3 myAlert mx-auto"
                                role="alert">
                                <?= $_SESSION['errSelectImg'] ?>
                                <?php unset($_SESSION['errSelectImg']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['errTrueFormat'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3 myAlert mx-auto"
                                role="alert">
                                <?= $_SESSION['errTrueFormat'] ?>
                                <?php unset($_SESSION['errTrueFormat']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['errImgSize'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3 myAlert mx-auto"
                                role="alert">
                                <?= $_SESSION['errImgSize'] ?>
                                <?php unset($_SESSION['errImgSize']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- End Message Alert Bootstrap -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
                        </div>
                        <!-- Edit Product -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Image</th>
                                        <th>Car Name</th>
                                        <th>Year</th>
                                        <th>Type</th>
                                        <th>Harga</th>
                                        <th class="text-center">Action</th>
                                    </tr>

                                    <?php $i = 1;
                                    foreach ($productList as $list): ?>
                                        <tr class="align-middle">
                                            <td id="no" class="text-center">
                                                <?= $i; ?>.
                                            </td>
                                            <td id="img" class="text-center">
                                                <img src="<?= "Assets/Upload/" . $list["image"]; ?>">
                                            </td>
                                            <td class="align-middle">
                                                <?= $list["name"]; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?= $list["year"]; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?= $list["type"]; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?= "Rp. " . number_format($list["price"]); ?>
                                            </td>
                                            <td id="action" class="align-middle">
                                                <div class="hstack gap-2 mx-auto">
                                                    <a href="/Web-Dealer/updateDataProducts?id=<?= $list["id"] ?>"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Update">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <div class="vr"></div>
                                                    <a href="/Web-Dealer/editProductList?id=<?= $list["id"] ?>"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    endforeach ?>
                                </table>
                            </div>
                        </div>
                        <!-- End Edit Product -->
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