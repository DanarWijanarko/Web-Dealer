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

// Show Data Chat Form
$chatForm = showData("SELECT * FROM chat ORDER BY id DESC");

// Jika 'id' Sudah Ada Pada Url Jalankan Function Didalamnya
if (isset($_GET["id"])) {
    $getId = $_GET["id"];
    $query = "DELETE FROM chat WHERE id = $getId";
    // Jika Data yang Terpengaruh Lebih dari 0 Maka Jalankan Function
    if (deleteData($query) > 0) {
        header("Location: /Web-Dealer/chatForm");
    } else {
        echo mysqli_connect_error();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Chat Form" ?>
    <?php include("partials/Head-admin.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php $heading = "Edit Chat Form" ?>
        <?php include("partials/Sidebar.php") ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("partials/TopNavBar.php") ?>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Chat Form</h6>
                        </div>
                        <!-- Edit Chat Form -->
                        <div class="card-body">
                            <div class="table-responsive-xxl px-5">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th class="text-center">Action</th>
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
                                            <td id="action" class="text-center">
                                                <a href="/Web-Dealer/chatForm?id=<?= $cf["id"] ?>" class="btn p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    endforeach ?>
                                </table>
                            </div>
                        </div>
                        <!-- End Edit Chat Form -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End container-fluid -->
            </div>
            <!-- End content -->
        </div>
        <!-- End content-wrapper -->
    </div>
    <?php include("partials/Modal.php") ?>
    <?php include("partials/script-footer.php") ?>
</body>

</html>