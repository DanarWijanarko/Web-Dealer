<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Logo -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center my-2" href="/Web-Dealer/Dashboard">
        <img src="Assets/img/logo.png" class="img-fluid myImg" alt="Responsive image">
    </a>
    <!-- End Logo -->
    <hr class="sidebar-divider my-0">
    <!-- Dashboard -->
    <li class="nav-item <?= Active("/Web-Dealer/Dashboard") ?>">
        <a class="nav-link" href="/Web-Dealer/Dashboard">
            <i class="fas fa-tachometer-alt-fast"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- End Dashboard -->

    <hr class="sidebar-divider">

    <!-- Products List Heading -->
    <div class="sidebar-heading">
        Products List Settings
    </div>
    <!-- End Products List Heading -->
    <!-- Edit Product, Add New Product -->
    <li class="nav-item <?= Active("/Web-Dealer/editProductList") ?>">
        <a class="nav-link" href="/Web-Dealer/editProductList">
            <i class="fas fa-edit"></i>
            <span>Edit Product</span>
        </a>
    </li>
    <li class="myside nav-item <?= Active("/Web-Dealer/addProduct") ?>">
        <a class="nav-link" href="/Web-Dealer/addProduct">
            <i class="fas fa-plus"></i>
            <span>Add New Product</span>
        </a>
    </li>
    <!-- End Edit Product, Add New Product -->

    <hr class="sidebar-divider">

    <!-- Chat Setting Heading -->
    <div class="sidebar-heading">
        Chat Setting
    </div>
    <!-- End Chat Setting Heading -->
    <!-- Edit Chat Form -->
    <li class="nav-item <?= Active("/Web-Dealer/chatForm") ?>">
        <a class="nav-link" href="/Web-Dealer/chatForm">
            <i class="far fa-comments"></i>
            <span>Edit Chat Form</span>
        </a>
    </li>
    <!-- End Edit Chat Form -->

    <hr class="sidebar-divider">

    <!-- Account Settings Heading -->
    <div class="sidebar-heading">
        Account Settings
    </div>
    <!-- End Account Settings Heading -->
    <!-- Update Account, Register an Account, Sign Out -->
    <li class="nav-item <?= Active("/Web-Dealer/updateAcc") ?>">
        <a class="nav-link" href="/Web-Dealer/updateAcc">
            <i class="fas fa-pen"></i>
            <span>Update Account</span>
        </a>
    </li>
    <li class="myside nav-item <?= Active("/Web-Dealer/registerAcc") ?>">
        <a class="nav-link" href="/Web-Dealer/registerAcc">
            <i class="fa-solid fa-registered"></i>
            <span>Register an Admin</span>
        </a>
    </li>
    <li class="myside nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-target="#signoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span>
        </a>
    </li>
    <!-- End Update Account, Register an Account, Sign Out -->

    <hr class="sidebar-divider my-0">

    <!-- Go to Webiste -->
    <li class="nav-item">
        <a class="nav-link" href="/Web-Dealer/">
            <i class="fa fa-arrow-right"></i>
            <span>Go to Website</span>
        </a>
    </li>
    <!-- End Go to Webiste -->

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <!-- End Sidebar Toggler -->
</ul>

<?php
function Active($key)
{
    if ($_SERVER['REQUEST_URI'] === $key) {
        echo 'active';
    }
}

?>