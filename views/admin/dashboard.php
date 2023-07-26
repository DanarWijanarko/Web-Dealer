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

// Show Data Product List
$chatForm = showData("SELECT * FROM chat ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Dashboard"; ?>
    <?php include("partials/Head-admin.php") ?>
</head>

<body>
    <div id="wrapper">
        <?php include("partials/Sidebar.php") ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $heading = "Dashboard" ?>
                <?php include("partials/TopNavBar.php") ?>
                <div class="container-fluid">
                    <!-- Message Alert Bootstrap -->
                    <div class="mx-5 my-4">
                        <?php if (isset($_SESSION["accSuccess"])): ?>
                            <div class="alert alert-success alert-dismissible fade show myAlert mx-auto" role="alert">
                                <?= $_SESSION["accSuccess"] ?>
                                <?php unset($_SESSION["accSuccess"]) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION["accFailed"])): ?>
                            <div class="alert alert-danger alert-dismissible fade show myAlert mx-auto" role="alert">
                                <?= $_SESSION["accFailed"] ?>
                                <?php unset($_SESSION["accFailed"]) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                    
                        <!-- Error Untuk Gambar -->
                        <?php if (isset($_SESSION['errSelectImg'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3 myAlert mx-auto" role="alert">
                                <?= $_SESSION['errSelectImg'] ?>
                                <?php unset($_SESSION['errSelectImg']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['errTrueFormat'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3 myAlert mx-auto" role="alert">
                                <?= $_SESSION['errTrueFormat'] ?>
                                <?php unset($_SESSION['errTrueFormat']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['errImgSize'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3 myAlert mx-auto" role="alert">
                                <?= $_SESSION['errImgSize'] ?>
                                <?php unset($_SESSION['errImgSize']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- End Message Alert Bootstrap -->
                    
                    <!-- Account Detail -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profile Picture</h6>
                                </div>
                                <div class="card-body">
                                    <img src="<?= "Assets/Upload/profilePicture/" . $acc["image"]; ?>" class="rounded mx-auto d-block"
                                        style="height: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Account Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= ucfirst($acc['name']) ?></p>
                                        </div>
                                    </div>
                                    <hr class="bg-primary" style="height: 1px">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $acc['email'] ?></p>
                                        </div>
                                    </div>
                                    <hr class="bg-primary" style="height: 1px">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= $acc['phone'] ?></p>
                                        </div>
                                    </div>
                                    <hr class="bg-primary" style="height: 1px">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?= ucfirst($acc['address']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End cart-body -->
                            </div>
                        </div>
                    </div>
                    <!-- End Account Detail -->

                    <!-- Products List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Products List</h6>
                        </div>
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
                                    </tr>

                                    <?php $i = 1;
                                    foreach ($productList as $list): ?>
                                    <tr>
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
                                    </tr>
                                    <?php $i++;
                                    endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Products List -->

                    <!-- Chat Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Chat Form</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <!-- <th class="text-center">Action</th> -->
                                    </tr>

                                    <?php $i = 1;
                                    foreach ($chatForm as $cf): ?>
                                    <tr class="align-middle">
                                        <td id="no" class="text-center">
                                            <?= $i ?>.
                                        </td>
                                        <td id="name">
                                            <?= $cf["name"] ?>
                                        </td>
                                        <td id="email">
                                            <?= $cf["email"] ?>
                                        </td>
                                        <td id="message">
                                            <?= $cf["message"] ?>
                                        </td>
                                        <!-- <td id="action" class="text-center">
                                                <a href="/Web-Dealer/chatForm-admin?id=<?= $cf["id"] ?>" class="btn p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td> -->
                                    </tr>
                                    <?php $i++;
                                    endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Chat Form -->
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>
    <?php include("partials/Modal.php") ?>
    <?php include("partials/script-footer.php") ?>
</body>

</html>