<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/public/css/styles.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <style>
        .a{
            display: flex;
            width: 160px;
        }
        .bia{
            display: flex;
        }
        .buy{
            background-color: gray;
        }
        .tru{
            width: 30px;
            height: 35px;
        }
    </style>

    <?php include 'inc/header.php'; ?>
    <!-- card -->
    <div class="cart">
        <div class="container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>


                <?php $cart_list = get_cart() ?>
                <?php foreach ($cart_list as $order_detail) { ?>
                    <!-- single cart -->
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="<?php echo $order_detail['img']; ?>" alt="">
                                <div>
                                    <p class="d-md-block d-sm-block d-none"><?php echo $order_detail['name']; ?></< /p>
                                        <br>
                                        <small>Price: $<?php echo $order_detail['price']; ?></small>
                                        <br>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                        <button type="submit" class="fas fa-trash"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="bia">
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="-1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button class="tru" type="submit">-</button>
                            </form>
                            <div class="h-8 w-10 flex items-center justify-center">
                                <?php echo $order_detail['quantity']; ?>
                            </div>
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none m">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button class="tru" type="submit">+</button>
                            </form>
                            </div>
                        </td>
                        <td>$<?php echo total_cart_item($order_detail['price'], $order_detail['quantity']); ?></td>
                    </tr>
                    <tr>
                       
                    <?php } ?>

            </table>
        </div>

        <div class="total-price container">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo total_cart(); ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo total_cart(); ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="buy">
                            <a href="checkout.php" class="bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
             hover:text-primary transition text-sm w-full block text-center a">
                                Process to checkout
                            </a>

                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    </div>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <?php include 'inc/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>