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

if (isset($_POST["submit"])) {
    if (editAccountProfile($_POST) > 0) {
        $_SESSION["accSuccess"] = "Account Berhasil di Edit !!!";
        header("Location: /Web-Dealer/Dashboard");
    } else {
        $_SESSION["accFailed"] = "Account Gagal di Edit !!!";
        header("Location: /Web-Dealer/Dashboard");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Update Account" ?>
    <?php include("partials/Head-admin.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php $heading = "Update Account" ?>
        <?php include("partials/Sidebar.php"); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("partials/TopNavBar.php"); ?>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Account</h6>
                        </div>
                        <!-- Update Account -->
                        <div class="card-body ">
                            <form action="" method="post" class="newData" enctype="multipart/form-data">
                                <!-- Edit Disini Adalah Mengambil Dulu Data yang Ada Didatabase,
                                    Jika Ada Data yang ingin Diganti Rubah Datanya Jika tidak Tidak Perlu Diganti
                                    id -> Agar Bisa Masuk Ke Database  -->
                                <input type="hidden" name="id" id="accid" value="<?= $acc['id'] ?>">
                                <!-- img -> untuk Memanggil Nama Gambar Lama Jika Diganti Akan Direplace Dengan
                                    Gambar Baru, Jika Tidak Tetap Menggunakan Nama Gambar Lama -->
                                <input type="hidden" name="oldImg" id="imgid" value="<?= $acc['image'] ?>">
                                <input type="hidden" name="username" id="username" value="<?= $acc['username'] ?>">
                                <input type="hidden" name="password" id="password" value="<?= $acc['password'] ?>">

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="carName">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="carName"
                                        value="<?= $acc['name'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="<?= $acc['email'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="<?= $acc['phone'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        value="<?= $acc['address'] ?>" autocomplete="off">
                                </div>

                                <div class="form-group my-2 mx-xl-5 mx-lg-5 mx-md-5 mx-sm-5 mx-auto">
                                    <label for="img">Edit Image</label>
                                    <img src="<?= 'Assets/Upload/profilePicture/' . $acc["image"] ?>"
                                        class="img-thumbnail rounded d-block my-2">
                                    <label for="formFileSm" class="form-label">
                                        Jika Ingin Mengganti Gambar Klik 'Choose File'
                                    </label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="image"
                                        type="file">
                                </div>

                                <button type="submit" name="submit"
                                    class="btn btn-primary mt-1 ml-xl-5 ml-lg-5 ml-md-5 ml-sm-5 mx-auto">
                                    Update Data
                                </button>
                                <a href="/Web-Dealer/Dashboard" class="btn btn-primary mt-1">
                                    Cancel
                                </a>
                            </form>
                        </div>
                        <!-- End Update Account -->
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