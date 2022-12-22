<header>
    <!-- place navbar here-->
    <div class="container-fluid">
        <div class="d-sm-none d-none d-md-block">
            <div class="row bg-green text-center ">
                <div class="col-lg-4 col-md-4 ">
                    <i class="fa-solid fa-phone"></i>
                    + 84 788 788 975
                </div>
                <div class="col-lg-4 col-md-4 ">
                    <i class="fa-solid fa-plate-wheat"></i>
                    Biaphan2002@gmail.com
                </div>
                <div class="col-lg-4 col-md-4 ">
                    <i class="fa-solid fa-car-on"></i>
                    3-5 Business days delivery & Free Returns
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Vegefoods</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu

            </button>
            <form action="search.php" method="get">

                <div class="d-flex">
                <input type="text" name="search">
                <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                </div>
            </form>



            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php" >Shop</a>
                       
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping"></i><span class="icon-shopping_cart"></span>
                    <?php echo number_cart_product() ?></a></li>
                    <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    <li><a class="nav-link" href="<?php echo BASE_URL . '/admin/product'; ?>" class="text-gray-200 hover:text-white transition">Admin</a></li>
                    <?php } else { ?>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>