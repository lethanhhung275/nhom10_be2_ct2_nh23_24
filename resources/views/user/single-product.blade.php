﻿<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron-single product</title>
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


                <!--product wrapper start-->
                <div class="product_details">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product_tab fix">
                                <div class="product_tab_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#p_tab1" role="tab"
                                                aria-controls="p_tab1" aria-selected="false"><img
                                                    src="user\assets\img\cart\cart.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2"
                                                aria-selected="false"><img src="user\assets\img\cart\cart2.jpg"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3"
                                                aria-selected="false"><img src="user\assets\img\cart\cart4.jpg"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content produc_tab_c">
                                    <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="user\assets\img\product\product13.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="user\assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="view_img">
                                                <a class="large_view" href="user\assets\img\product\product13.jpg"><i
                                                        class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="user\assets\img\product\product14.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="user\assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="view_img">
                                                <a class="large_view" href="user\assets\img\product\product14.jpg"><i
                                                        class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="user\assets\img\product\product15.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="user\assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="view_img">
                                                <a class="large_view" href="user\assets\img\product\product15.jpg"> <i
                                                        class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">
                                <h1>Printed Summer Dress</h1>
                                <div class="product_ratting mb-10">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"> Write a review </a></li>
                                    </ul>
                                </div>
                                <div class="product_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati modi culpa
                                        voluptates illo, quos magni totam inventore delectus perspiciatis
                                        necessitatibus, iure rerum! Deleniti nobis voluptatibus minus, iusto ullam quae
                                        esse..</p>
                                </div>

                                <div class="content_price mb-15">
                                    <span>$118.00</span>
                                    <span class="old-price">$130.00</span>
                                </div>
                                <div class="box_quantity mb-20">
                                    <form action="#">
                                        <label>quantity</label>
                                        <input min="0" max="100" value="1" type="number">
                                    </form>
                                    <button type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    <a href="#" title="add to wishlist"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="product_d_size mb-20">
                                    <label for="group_1">size</label>
                                    <select name="size" id="group_1">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                    </select>
                                </div>

                                <div class="sidebar_widget color">
                                    <h2>Choose Color</h2>
                                    <div class="widget_color">
                                        <ul>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li> <a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product_stock mb-20">
                                    <p>299 items</p>
                                    <span> In stock </span>
                                </div>
                                <div class="wishlist-share">
                                    <h4>Share on:</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--product details end-->


                <!--product info start-->
                <div class="product_d_info">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#info" role="tab"
                                                aria-controls="info" aria-selected="false">More info</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                                aria-selected="false">Data sheet</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#reviews" role="tab"
                                                aria-controls="reviews" aria-selected="false">Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand
                                                offers feminine designs delivering stylish separates and statement
                                                dresses which have since evolved into a full ready-to-wear collection in
                                                which every item is a vital part of a woman's wardrobe. The result?
                                                Cool, easy, chic looks with youthful elegance and unmistakable signature
                                                style. All the beautiful pieces are made in Italy and manufactured with
                                                the greatest attention. Now Fashion extends to a range of accessories
                                                including shoes, hats, belts and more!</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="sheet" role="tabpanel">
                                        <div class="product_d_table">
                                            <form action="#">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first_child">Compositions</td>
                                                            <td>Polyester</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Styles</td>
                                                            <td>Girly</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Properties</td>
                                                            <td>Short Dress</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand
                                                offers feminine designs delivering stylish separates and statement
                                                dresses which have since evolved into a full ready-to-wear collection in
                                                which every item is a vital part of a woman's wardrobe. The result?
                                                Cool, easy, chic looks with youthful elegance and unmistakable signature
                                                style. All the beautiful pieces are made in Italy and manufactured with
                                                the greatest attention. Now Fashion extends to a range of accessories
                                                including shoes, hats, belts and more!</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand
                                                offers feminine designs delivering stylish separates and statement
                                                dresses which have since evolved into a full ready-to-wear collection in
                                                which every item is a vital part of a woman's wardrobe. The result?
                                                Cool, easy, chic looks with youthful elegance and unmistakable signature
                                                style. All the beautiful pieces are made in Italy and manufactured with
                                                the greatest attention. Now Fashion extends to a range of accessories
                                                including shoes, hats, belts and more!</p>
                                        </div>
                                        <div class="product_info_inner">
                                            <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                                <strong>Posthemes</strong>
                                                <p>09/07/2018</p>
                                            </div>
                                            <div class="product_demo">
                                                <strong>demo</strong>
                                                <p>That's OK!</p>
                                            </div>
                                        </div>
                                        <div class="product_review_form">
                                            <form action="#">
                                                <h2>Add a review </h2>
                                                <p>Your email address will not be published. Required fields are marked
                                                </p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment" id="review_comment"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" type="text">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product info end-->


                <!--new product area start-->
                <div class="new_product_area product_page">
                    <div class="row">
                        <div class="col-12">
                            <div class="block_title">
                                <h3> 11 other products category:</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="single_p_active owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product1.jpg"
                                                alt=""></a>
                                        <div class="img_icone">
                                            <img src="user\assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$50.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Curabitur sodales</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product2.jpg"
                                                alt=""></a>
                                        <div class="hot_img">
                                            <img src="user\assets\img\cart\span-hot.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$40.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Quisque ornare dui</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product3.jpg"
                                                alt=""></a>
                                        <div class="img_icone">
                                            <img src="user\assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$60.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Sed non turpiss</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product4.jpg"
                                                alt=""></a>
                                        <div class="hot_img">
                                            <img src="user\assets\img\cart\span-hot.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$65.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Duis convallis</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product6.jpg"
                                                alt=""></a>
                                        <div class="img_icone">
                                            <img src="user\assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$50.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Curabitur sodales</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--new product area start-->


                <!--new product area start-->
                <div class="new_product_area product_page">
                    <div class="row">
                        <div class="col-12">
                            <div class="block_title">
                                <h3> Related Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="single_p_active owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product6.jpg"
                                                alt=""></a>
                                        <div class="img_icone">
                                            <img src="user\assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$50.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Curabitur sodales</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product5.jpg"
                                                alt=""></a>
                                        <div class="hot_img">
                                            <img src="user\assets\img\cart\span-hot.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$40.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Quisque ornare dui</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product4.jpg"
                                                alt=""></a>
                                        <div class="img_icone">
                                            <img src="user\assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$60.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Sed non turpiss</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product3.jpg"
                                                alt=""></a>
                                        <div class="hot_img">
                                            <img src="user\assets\img\cart\span-hot.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$65.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Duis convallis</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ url('single-product') }}"><img src="user\assets\img\product\product2.jpg"
                                                alt=""></a>
                                        <div class="img_icone">
                                            <img src="user\assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$50.00</span>
                                        <h3 class="product_title"><a href="{{ url('single-product') }}">Curabitur sodales</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="Quick view">View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--new product area start-->

            </div>
            <!--pos page inner end-->
        </div>
    </div>
    <!--pos page end-->

    <!--footer area start-->
    @include('user.layout.footer_area')
    <!--footer area end-->

    <!-- modal area start -->
    @include('user.layout.modal_area')

    <!-- modal area end -->



    <!-- all js here -->
    <script src="user\assets\js\vendor\jquery-1.12.0.min.js"></script>
    <script src="user\assets\js\popper.js"></script>
    <script src="user\assets\js\bootstrap.min.js"></script>
    <script src="user\assets\js\ajax-mail.js"></script>
    <script src="user\assets\js\plugins.js"></script>
    <script src="user\assets\js\main.js"></script>
</body>

</html>
