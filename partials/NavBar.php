<nav>
    <a class="nav-logo" href="/Web-Dealer/">
        <img src="Assets/img/logo.png">
    </a>
    <ul>
        <label for="check-box" class="bars">
            <i class="fa-solid fa-bars"></i>
        </label>
        <section class="menu">
            <li><a href="/Web-Dealer/">Home</a></li>
            <li class="our-product">
                <a href="/Web-Dealer/our-product">
                    Our Products
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="/Web-Dealer/brio">
                            New Honda Brio Satya</a>
                    </li>
                    <li><a href="/Web-Dealer/brv">
                            All New Honda BR-V</a>
                    </li>
                    <li><a href="/Web-Dealer/civic">
                            All New Honda Civic Type R</a>
                    </li>
                    <li><a href="/Web-Dealer/crv">
                            New Honda CR-V</a>
                    </li>
                    <li><a href="/Web-Dealer/hrv">
                            All New Honda HR-V</a>
                    </li>
                    <li><a href="/Web-Dealer/mobilio">
                            New Honda Mobilio</a>
                    </li>
                </ul>
            </li>
            <li><a href="/Web-Dealer/product-list">Products List</a></li>
            <li><a href="/Web-Dealer/about">About</a></li>
        </section>
        <?php 
        if ($_SESSION["level"] == "admin"): ?>
            <a href="/Web-Dealer/Dashboard" class="admin">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="hover-text">Back To Admin Page</span>
            </a>
        <?php endif ?>
        <a href="/Web-Dealer/logout" class="sign-out">
            <i class="fa fa-sign-out"></i>
            <span class="hover-text">Sign Out</span>
        </a>
    </ul>
</nav>