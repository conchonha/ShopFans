<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Products</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS  -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS  -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS  -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- style  -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS  -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="chat hidden">
        <button class="open-button"> <i class="fas fa-times"></i>  <i class="fab fa-facebook-messenger"></i> </button>
        <div class="chat-popup" id="myForm">
            <div class="arrow-down"></div>
            <form action="" class="form-container">

                <a href="https://www.facebook.com/messages">
                    <h3> <i class="fab fa-facebook-messenger"></i> Messenger</h3>
                </a>
                <a href="https://zalo.me/pc">
                    <h3><img src="./images/zalo.png" width="13%" alt="">Zalo </h3>
                </a>
                <h3 onclick="openForm1()"><i class="fas fa-phone"></i> Yêu cầu gọi lại </h3>

            </form>
        </div>
        <div class="chat-popup1" id="myForm1">
            <div class="arrow-down"></div>
            <form action="" class="form-container">
                <span> <i class="fas fa-times"></i> </span>
                <h5>Please enter your phone number and we call you back soon</h5>
                <input type="number" min="0" placeholder="+XXX-XX-XXX-XX-XX">
                <button type="button" class="btn ">Waiting for call</button>
            </form>
        </div>
    </div>
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <div id="backtop" class="onTop hidden">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </a>
    <div class="header">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 text"> <i class="fas fa-exclamation-triangle"></i> MAKING THE WORLD ALWAYS FRESH</div>
                <div class="col-lg-4 text"> <i class="fas fa-phone-alt"></i> HOTLINE: 0909.090.090</div>
                <div class="col-lg-4 text"> <i class="fas fa-headset"></i> 24/7 ONLINE SUPPORT</div>
            </div>
        </div>
    </div>
    <!--Start Header Top area -->
    <div class="header_area_top">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="logo ">
                        <a href="index.php">
                            <img src="./images/logo1.png" alt="" width="60%">
                        </a>
                    </div>
                    <!--End Logo area -->
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 text-center">
                    <form action="#" name="myForm">
                        <div class="search_box ">
                            <input id="itp" class="input_text" type="text" placeholder="Search" />
                            <button type="submit" class="btn-search">
									<span><i class="fa fa-search"></i></span>
							</button>
                        </div>
                    </form>
                    <!--End Search area -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
                    <!--Start Header Right Cart area -->
                    <div class="account_card_area">
                        <ul id="account_nav">
                            <li><a href="my-account.php">Account <i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                            <li>
                                <a href="cart.php">
                                    <img src="images/cart.webp" width="25%" alt="">
                                    <span class="cart_zero">2</span>
                                </a>
                                <div class="cart_down_area">
                                    <div class="cart_single">
                                        <a href="#"><img src="images/img-products/quat-phun-suong-1.jpg" alt="" width="30%" /></a>
                                        <h2><a href="#">Pelonic FS40</a></h2>
                                        <p>299 $</p>
                                    </div>
                                    <div class="cart_single">
                                        <a href="#"><img src="./images/product (3).jpg" alt="" width="30%" /></a>
                                        <h2><a href="#">Royal Aura Fan S650</a> </h2>
                                        <p>1259 $</p>
                                    </div>
                                    <div class="cart_shoptings">
                                        <a href="checkout.php" class="cart_shoptings-link">Buy now</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End Header Right Cart area -->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Top area -->
    <!--Start Main Menu area -->
    <div class="header_botttom_area bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--Start desktop menu area -->
                    <div class="main_menu">
                        <ul id="nav_menu" class="active_cl">
                            <li>
                                <a href="index.php"> <i class="fas fa-home"></i> <span class="Home">Home</span></a>
                            </li>
                            <li>
                                <a href="shop.php"> <span class="Clothings">Product</span> <i class="fas fa-caret-down"></i></a>
                                <div class="mega_menu_list">
                                    <div class="single_megamenu">
                                        <div class="items_list">
                                            <a href="product.php"><i class="fa fa-angle-right"></i> Ceiling Fans</a>
                                            <a href="product1.php"><i class="fa fa-angle-right"></i> Tower Fans</a>
                                            <a href="product2.php"><i class="fa fa-angle-right"></i> Misting Fans</a>
                                            <a href="product3.php"><i class="fa fa-angle-right"></i> Steam Fans</a>
                                            <a href="product4.php"><i class="fa fa-angle-right"></i> Stand Fans</a>
                                            <a href="product5.php"><i class="fa fa-angle-right"></i> Wall Fans</a>
                                            <a href="product6.php"><i class="fa fa-angle-right"></i> Box Fans</a>
                                            <a href="product7.php"><i class="fa fa-angle-right"></i> Exhaust Fan</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="guarantee.php"><span class="Lookbook">Guarantee</span></a>
                            </li>
                            <li>
                                <a href="endow.php"><span class="Footwear">Endow</span></a>
                            </li>
                            <li>
                                <a href="about-us.php"><span class="Footwear">About</span></a>
                            </li>
                            <li>
                                <a href="contact.php"><span class="Footwear">Contact</span></a>
                            </li>
                        </ul>
                    </div>
                    <!--End desktop menu area -->
                </div>
            </div>
        </div>
    </div>
    <!--End Main Menu area -->
    <!--Start breadcrumbs area -->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><span>Ι</span></li>
                            <li>Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End breadcrumbs area -->
    <!--Start product area -->
    <div class="clothing_product_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <div class="catagory_price_color">
                        <div class="catagory_area">
                            <h2>category</h2>
                            <ul class="catagory">
                                <li><a href="#"><i class="fa fa-angle-right"></i>ceiling fans</a> <span>(12)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>tower fans</a><span>(6)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>misting fans</a><span>(6)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>steam fans</a><span>(3)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>stand fans</a><span>(6)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>wall fans</a><span>(3)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>box fans</a><span>(3)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>exhaust fans</a><span>(2)</span></li>
                            </ul>
                        </div>
                        <div class="priceing_area">
                            <h2>price</h2>
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="amount" name="price" />
                                        <input type="submit" value="Search" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catagory_area">
                            <h2>colors</h2>
                            <ul class="catagory">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Black</a> <span>(1)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Blue</a><span>(2)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Green</a><span>(8)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Yellow</a><span>(4)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Red</a><span>(8)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>White</a><span>(6)</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="popular_tag_area">
                        <div class="popular_items">
                            <h2>popular brand</h2>
                            <ul id="single_popular">
                                <li><a href="#">Panasonic</a></li>
                                <li><a href="#">Toshiba</a></li>
                                <li><a href="#">Mitsubisi</a></li>
                                <li><a href="#">Senko</a></li>
                                <li><a href="#">Yanfan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="popular_tag_area">
                                <div class="popular_items">
                                    <h2>latest products</h2>
                                </div>
                            </div>
                            <div class="clothing_carousel_list">
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="images/img-products/quattran (1).jpg" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Yanmar L379</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>&emsp;$427.55</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="images/box11.png" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Genesis X506</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>&emsp;&nbsp;$39.99</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="images/ceiling6.png" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Royal S650-CX</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>&emsp;$739.52</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="images/img-products/quattran (1).jpg" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">ddddddddđ</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$14.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="images/img-products/quattran (5).jpg" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">sssssssssssss</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="images/img-products/quatphunsuong3.jpg" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">iiiiiiiiiiiii</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="catagory_banner">
                                <img src="images/banner9.png" alt="" height="240px" />
                            </div>
                        </div>
                    </div>
                    <div class="my_tabs">
                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-shop/quat (1).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Toshiba LX-22</h2>
                                                    <p><span class="popular_price">15 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/preview.jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Toshiba FS-520</h2>
                                                    <p><span class="popular_price">13,5 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-shop/quat (3).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Yanfan C29</h2>
                                                    <p><span class="regular_price">150 $</span> <span class="popular_price">115 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sale_product">
                                                    <h5>Sale</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-products/quatsacdien3.jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Senko XS-150</h2>
                                                    <p><span class="regular_price">47 $</span> <span class="popular_price">32,9 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="#" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sale_product">
                                                    <h5>Sale</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-products/quattran (9).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Led KC06</h2>
                                                    <p><span class="popular_price">837 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-products/quat-phun-suong-1.jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Panasonic L270</h2>
                                                    <p><span class="popular_price">62 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-shop/quat (7).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Senko A227</h2>
                                                    <p><span class="regular_price">99 $</span> <span class="popular_price">89 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sale_product">
                                                    <h5>Sale</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-products/quattran (3).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>hhhhhhhhhhhhhhh</h2>
                                                    <p><span class="popular_price">1.250 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-shop/quat (12).png" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>kkkkkkkkkkkkk</h2>
                                                    <p><span class="popular_price">150 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-shop/quat (11).png" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Rapido Z400-XS
                                                    </h2>
                                                    <p><span class="regular_price">144 $</span> <span class="popular_price">132 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sale_product">
                                                    <h5>Sale</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-products/quattran (9).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Royal S400-LX</h2>
                                                    <p><span class="popular_price">1.365 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">
                                                <a href="product.php" ><img src="images/img-products/quattran (5).jpg" alt="" /></a>
                                                <div class="product_details">
                                                    <h2>Royal Super SS65</h2>
                                                    <p><span class="popular_price">866 $</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>

                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog_pagination">
                                            <h2>Page :</h2>
                                            <ul class="pagination_list">
                                                <li class="btna" style="transform: rotate(180deg);">
                                                    <a href="#!"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a>
                                                </li>
                                                <li class="active a">1</li>
                                                <li class="b"><a href="#">2</a></li>
                                                <li class="c"><a href="#">3</a></li>
                                                <li class="btnb">
                                                    <a href="#!"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a>
                                                </li>

                                                <script>
                                                    var btna = document.querySelector('.btna');
                                                    var btnb = document.querySelector('.btnb');
                                                    var a = document.querySelector('.a');
                                                    var b = document.querySelector('.b');
                                                    btnb.addEventListener('click', function() {
                                                        a.classList.remove('active');
                                                        b.classList.add('active');
                                                    });
                                                    btna.addEventListener('click', function() {
                                                        b.classList.remove('active');
                                                        a.classList.add('active');
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 img_shop">
                    <img src="images/30_.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--End product area -->
    <!--Start Footer area -->
    <div class="footer_area home1_margin_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_text feature_newsletter">
                        <h4>Information</h4>
                        <p>Sign up to receive the latest information and offers</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sign_up">
                        <form action="#">
                            <input class="sign_text" type="text" placeholder="Enter your gmail ..." />
                            <button type="submit" class="sign">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                </svg>
									<span>Register</span>
								</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer_menu_area">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support">
                            <h2>Executive Office</h2>
                            <p>Fanfan Company: <span>590 CMT8, Ward 11, District 3, Ho Chi Minh City</span></p>
                            <p>Hotline: <span>0909.090.090<br>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0901.010.010</span></p>
                            <p>Email: <span>fanfan@gmail.com</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>branch</h2>
                            <ul class="footer_menu">
                                <li><a href="https://goo.gl/maps/tkK3Uus9TFCd5jCH6">590 Cach Mang Thang 8, Ward 11, District 3, Ho Chi Minh City</a></li>
                                <li><a href="https://goo.gl/maps/8pGc9QHxCoJJxz7C8">Alley 2 Ham Nghi, Ben Nghe Ward, District 1, Ho Chi Minh City</a></li>
                                <li><a href="https://goo.gl/maps/VfWGFaUo5x4Cz65g6">1 Le Dai Hanh, Ward 11, <br>District 11, Ho Chi Minh City</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>customer care</h2>
                            <ul class="footer_menu">
                                <li><a href="infomation.php">Information security policy</a></li>
                                <li><a href="commit.php">Commitment to satisfaction</a></li>
                                <li><a href="complaint.php">Complaint inquiries</a></li>
                                <li><a href="payment.php">Payment Guide</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>social network link</h2>
                            <ul class="footer_menu">
                                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                                <a href="http://gmail.com/" class="fab fa-google"></a>
                                <a href="http://instagram.com/" class="fab fa-linkedin"></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copy__right">
            <div class="row">
                <div class="col-sm-4 text-right">
                </div>
                <div class="col-sm-4 text-center" style="margin-top: 10px;">
                    <P> © All rights reserved</P>
                </div>
                <div class="col-sm-4  text-right" style="padding-right: 0; margin-top: 10px;">
                    <img src="./images/visa1.png" alt="" width="60%">
                </div>
            </div>
        </div>
    </div>
    <!--End Footer area -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- jquery JS  -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Mobile menu JS -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery.easing js -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <!-- knob circle js -->
    <script src="js/jquery.knob.js"></script>
    <!-- fancybox JS -->
    <script src="fancy-box/jquery.fancybox.pack.js"></script>
    <!-- price slider JS  -->
    <script src="js/price-slider.js"></script>
    <!-- nivo slider JS -->
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <!-- wow JS -->
    <script src="js/wow.js"></script>
    <!-- nivo-plugin JS -->
    <script src="js/nivo-plugin.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- carousel JS  -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS  -->
    <script src="js/plugins.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
    <script src="js/hearts.js"></script>
    <script src="js/display.js"></script>
</body>

</html>