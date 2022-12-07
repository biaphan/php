<?php require_once 'core/boot.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=  device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/public/css/style.css">
</head>

<body>
        <?php include './view/inc/header.php'; ?>  
        <?php include './view/inc/banner.php'; ?>
    <div class="container text-center">
        <div class="row">
            <div class="co-md-12 col-lg-12 col-12 my-3">
                <span class="title-top">Featured Products</span>
            </div>
            <div class="co-md-12 col-lg-12 col-12 mb-3">
                <h2 class="title-center"> Our Products</h2>
            </div>
            <div class="co-md-12 col-lg-12 col-12 mb-3">
                <p class="title-footer"> Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia</p>
            </div>
        </div>
    </div>
    <div class="my-5 container" id="new">
        <div class="row">
        <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>
            <div class="col-md-4 mt-3 product-item col-sm-12 col-lg-3">
                <div class="card">
                    <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                        <img class="card-img-top" height="300px" src="<?php echo $product['img']; ?>" alt="Product">
                    </a>
                    <div class="card-body">
                        <p class="card-text fw-bold product-title"><?php echo $product['name'];?></p>
                        <small class="text-secondary">
                        <?php echo $product['price']; ?>
                        </small>
                    </div>
                </div> 
            </div>
            <?php } ?>
        </div>
        
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-3 text-center ">
                <div class="service-item">
                    <div class="service-image si-1">
                        <div class="service-image-inner">
                            <i class="fa-solid fa-car-side"></i>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Free Shipping</h3>
                        <span>on order over 100$</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <div class="service-image si-2">
                        <div class="service-image-inner">
                            <i class="fa-solid fa-carrot"></i>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>ALWAYS FRESH</h3>
                        <span>on order over 100$</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item">
                    <div class="service-image si-3">
                        <div class="service-image-inner">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>SUPERIOR QUALITY</h3>
                        <span>on order over 100$</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="service-item">
                    <div class="service-image si-4">
                        <div class="service-image-inner">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>SUPPORT</h3>
                        <span>on order over 100$</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="category-wrap mb-4"
                                        style="background-image: url('./public/img/category-1.jpg');">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="category-wrap mb-4"
                                        style="background-image: url('./public/img/category-2.jpg');">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap-2 mb-4"
                                        style="background-image: url('./public/img/category.jpg');">
                                <div class="text text-center">
                                    <h2>Vegetables</h2>
                                    <p>Protect the health of every home</p>
                                    <p>
                                        <a href="#" class="btn btn-primary">shop now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="category-wrap mb-4"
                                style="background-image: url('./public/img/category-3.jpg');">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="category-wrap mb-4"
                                style="background-image: url('./public/img/category-4.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="ftco-section2 img" style="background-image:url(./public/img/bg_3.jpg) ;">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6 heading-section deal-of-the-day fadeInUp ftco-animated">
                        <span class="subheading">Best Price For You</span>
                        <h2 class="mb-4">Deal of the day</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <h3>
                            <a href="#">Spinach</a>
                        </h3>
                        <span class="price">"$10" <a href="#" style="color:#82ae46, text">now $5 only</a></span>
                    </div>
                </div>
            </div>
        </section>
        <?php include './view/inc/footer.php'; ?>
    <!-- Bootstrap JavaScript Libraries -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>