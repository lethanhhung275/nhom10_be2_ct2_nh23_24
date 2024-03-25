<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron-login</title>
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

                <!-- customer login start -->
                <div class="customer_login">
                    <div class="row">
                        <!--login area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="account_form">
                                <h2>login</h2>
                                <form action="#">
                                    <p>
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label>Passwords <span>*</span></label>
                                        <input type="password">
                                    </p>
                                    <div class="login_submit">
                                        <button type="submit">login</button>
                                        <label for="remember">
                                            <input id="remember" type="checkbox">
                                            Remember me
                                        </label>
                                        <a href="#">Lost your password?</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!--login area start-->

                        <!--register area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="account_form register">
                                <h2>Register</h2>
                                <form action="#">
                                    <p>
                                        <label>Email address <span>*</span></label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label>Passwords <span>*</span></label>
                                        <input type="password">
                                    </p>
                                    <div class="login_submit">
                                        <button type="submit">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--register area end-->
                    </div>
                </div>
                <!-- customer login end -->

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
