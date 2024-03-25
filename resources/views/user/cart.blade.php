<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron-cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="user\assets\img\favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="user\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="user\assets\css\plugin.css">
    <link rel="stylesheet" href="user\assets\css\bundle.css">
    <link rel="stylesheet" href="user\assets\css\style.css">
    <link rel="stylesheet" href="user\assets\css\responsive.css">
    <script src="user\assets\js\vendor\modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Add your site or application content here -->

    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                @include('user.layout.header_area')
                <!--header end -->
                <!--breadcrumbs area start-->
                @include('user.layout.breadcrumbs_area')
                <!--breadcrumbs area end-->



                <!--shopping cart area start -->
                <div class="shopping_cart_area">
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product_quantity">Quantity</th>
                                                    <th class="product_total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product_remove"><a href="#"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="user\assets\img\cart\cart17.jpg"
                                                                alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag fringilla</a>
                                                    </td>
                                                    <td class="product-price">£65.00</td>
                                                    <td class="product_quantity"><input min="0" max="100"
                                                            value="1" type="number"></td>
                                                    <td class="product_total">£130.00</td>


                                                </tr>

                                                <tr>
                                                    <td class="product_remove"><a href="#"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="user\assets\img\cart\cart18.jpg"
                                                                alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbags justo</a></td>
                                                    <td class="product-price">£90.00</td>
                                                    <td class="product_quantity"><input min="0" max="100"
                                                            value="1" type="number"></td>
                                                    <td class="product_total">£180.00</td>


                                                </tr>
                                                <tr>
                                                    <td class="product_remove"><a href="#"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="user\assets\img\cart\cart19.jpg"
                                                                alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag elit</a></td>
                                                    <td class="product-price">£80.00</td>
                                                    <td class="product_quantity"><input min="0" max="100"
                                                            value="1" type="number"></td>
                                                    <td class="product_total">£160.00</td>


                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart_submit">
                                        <button type="submit">update cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area start-->
                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code">
                                        <h3>Coupon</h3>
                                        <div class="coupon_inner">
                                            <p>Enter your coupon code if you have one.</p>
                                            <input placeholder="Coupon code" type="text">
                                            <button type="submit">Apply coupon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code">
                                        <h3>Cart Totals</h3>
                                        <div class="coupon_inner">
                                            <div class="cart_subtotal">
                                                <p>Subtotal</p>
                                                <p class="cart_amount">£215.00</p>
                                            </div>
                                            <div class="cart_subtotal ">
                                                <p>Shipping</p>
                                                <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                            </div>
                                            <a href="#">Calculate shipping</a>

                                            <div class="cart_subtotal">
                                                <p>Total</p>
                                                <p class="cart_amount">£215.00</p>
                                            </div>
                                            <div class="checkout_btn">
                                                <a href="#">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area end-->
                    </form>
                </div>
                <!--shopping cart area end -->

            </div>
            <!--pos page inner end-->
        </div>
    </div>
    <!--pos page end-->

    <!--footer area start-->
    @include('user.layout.footer_area')
    <!--footer area end-->





    <!-- all js here -->
    <script src="user\assets\js\vendor\jquery-1.12.0.min.js"></script>
    <script src="user\assets\js\popper.js"></script>
    <script src="user\assets\js\bootstrap.min.js"></script>
    <script src="user\assets\js\ajax-mail.js"></script>
    <script src="user\assets\js\plugins.js"></script>
    <script src="user\assets\js\main.js"></script>
</body>

</html>
