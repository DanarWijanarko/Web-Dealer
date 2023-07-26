<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800"><?= $heading ?></h1>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <div class="nav-link">
                <span class="mr-2 d-none d-sm-inline text-gray-600 small">
                    <?= ucfirst($acc["name"]) ?>
                </span>
                <img class="img-profile rounded-circle" src="<?= "Assets/Upload/profilePicture/" . $acc["image"]; ?>">
            </div>
        </li>
    </ul>
</nav>