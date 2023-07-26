<?php

// Jika "Admin" Belum Login Akan Diarahkan ke Halaman Login
// Jika yang Login "Admin" maka Admin Dapat Masuk Ke Halaman Admin maupun User
// jika yang Login "User" maka User Tidak Akan Bisa Masuk Ke Halaman Admin
if ($_SESSION["level"] != "admin") {
    header("Location: /Web-Dealer/login");
    exit;
}

// Submit For Function "register"
if (isset($_POST["register-btn"])) {
    // Jika Baris Pada Tabel > dari 0 Maka Berhasil Registrasi
    if (registerAdmin($_POST) > 0) {
        $_SESSION['Success'] = "Berhasil Melakukan Registrasi !!!";
    } else {
        // $_SESSION['Gagal'] = "Gagal Melakukan Registrasi !!!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Dashboard"; ?>
    <?php include("partials/Head-admin.php"); ?>
    <style>
        .vertical-align-middle {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container vertical-align-middle">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="row">
                    <div class="mt-2 ml-2 mb-0">
                        <a href="/Web-Dealer/Dashboard" class="btn">Cancel</a>
                    </div>
                    <!-- Form Container -->
                    <div class="pt-1 pl-5 pb-5 pr-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                Create an Admin Account!
                            </h1>
                        </div>

                        <!-- Message Alert Bootstrap -->
                        <div class="notif">
                            <?php if (isset($_SESSION["Success"])): ?>
                                <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                                    <?= $_SESSION["Success"] ?>
                                    <?php unset($_SESSION["Success"]) ?>
                                    <a class="btn" href="/Web-Dealer/Dashboard">OK</a>
                                </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['errUser'])): ?>
                                <div class="alert alert-danger mx-auto" role="alert">
                                    <?= $_SESSION['errUser'] ?>
                                    <?php unset($_SESSION['errUser']); ?>
                                </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['errPass'])): ?>
                                <div class="alert alert-danger mx-auto" role="alert">
                                    <?= $_SESSION['errPass'] ?>
                                    <?php unset($_SESSION['errPass']); ?>
                                </div>
                            <?php endif ?>

                            <!-- Error Untuk Gambar -->
                            <?php if (isset($_SESSION['errSelectImg'])): ?>
                                <div class="alert alert-danger mt-3 mx-auto" role="alert">
                                    <?= $_SESSION['errSelectImg'] ?>
                                    <?php unset($_SESSION['errSelectImg']); ?>
                                </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['errTrueFormat'])): ?>
                                <div class="alert alert-danger mt-3 mx-auto" role="alert">
                                    <?= $_SESSION['errTrueFormat'] ?>
                                    <?php unset($_SESSION['errTrueFormat']); ?>
                                </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['errImgSize'])): ?>
                                <div class="alert alert-danger mt-3 myAlert mx-auto" role="alert">
                                    <?= $_SESSION['errImgSize'] ?>
                                    <?php unset($_SESSION['errImgSize']); ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <!-- End Message Alert Bootstrap -->

                        <!-- Form Register -->
                        <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Full Name" name="name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address" name="email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Phone" name="phone" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Address" name="address" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Username" name="username" />
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" name="password" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password" name="password2" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formFileSm" class="form-label">Insert Profile Picture</label>
                                <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block" name="register-btn">Sign
                                Up</button>
                        </form>
                        <!-- End Form Register -->
                    </div>
                    <!-- End Form Container -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End card-body -->
        </div>
        <!-- End card -->
    </div>
    <!-- End container -->
    <?php include("partials/Modal.php") ?>
    <?php include("partials/script-footer.php") ?>
</body>

</html>