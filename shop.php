<?php include 'handling/utils/connect.php'; ?>
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
                    <form action="" name="myForm" method="get">
                        <div class="search_box ">
                            <input id="itp" name = "input_search" class="input_text" type="text" placeholder="Search" />
                            <button type="submit" name ="btn_search" class="btn-search">
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
                          <!-----------------  -- --------------ĐỔ DỮ LIỆU  MENU SHOP-------------------------------->
                                            <?php  
                                                $sql = 'SELECT * FROM `category`'; //query select
                                                $data = mysqli_query($conn,$sql); //thuc thi query
                                                while ($row = mysqli_fetch_assoc($data)) { // lap du lieu
                                                ?>
                                            <a href="shop.php?id_category=<?php echo $row['id_category'] ?>"><i class="fa fa-angle-right"></i> <?php echo $row['name'] ?></a>
                                            <?php } ?>
                <!-- -------------------------------END MENU------------------------------------------ -->   
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
                   <!-----------------  -- --------------ĐỔ DỮ LIỆU  MENU CATEGORY-------------------------------->
                            <?php  
                            //query select
                                $sql = 'SELECT * FROM `category`';
                                $data = mysqli_query($conn,$sql); //thực thi query
                                while ($row = mysqli_fetch_assoc($data)) { // lặp dữ liệu
                                ?>
                                <li><a href="shop.php?id_category=<?php echo $row['id_category'] ?>"><i class="fa fa-angle-right"></i><?php echo $row['name'] ?></a> 
                                    <span>
                                    <?php 
                                        //query select ( đếm số luong sp co trong catrgory)
                                        $sql = 'SELECT * FROM `product` WHERE `id_category` = '.$row['id_category'];
                                        $query = mysqli_query($conn,$sql);
                                        echo '('.mysqli_num_rows($query).')';
                                     ?>
                                </span></li>
                            <?php } ?>
                <!-- -------------------------------END MENU------------------------------------------ -->               
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
         <!-- -------------------------------COLOR CATEGORY------------------------------------------ -->  
                            <h2>colors</h2>
                            <ul class="catagory">
                                <?php 
                                    //query select
                                    $sql = "SELECT * FROM `color`"; 
                                    $query = mysqli_query($conn,$sql); //thực thi sql
                                    while ($row = mysqli_fetch_assoc($query)) { //lặp lấy dữ liẹu
                                        
                                ?>
                                <li><a href="shop.php?id_color=<?php echo $row['id_color'] ?>"><i class="fa fa-angle-right"></i><?php echo $row['name']; ?></a> <span>
                                    <?php 
                                        $sql1 = 'SELECT * FROM `product` WHERE `id_color` = '.$row['id_color'];
                                        $data = mysqli_query($conn,$sql1);
                                        echo mysqli_num_rows($data);
                                     ?>
                                </span></li>
                            <?php } ?>
       <!-- -------------------------------END------------------------------------------ -->
                            </ul>
                        </div>
                    </div>
                    <div class="popular_tag_area">
                        <div class="popular_items">
                            <h2>popular brand</h2>
                            <ul id="single_popular">
       <!-- -------------------------------The Firm------------------------------------------ -->
                                <?php 
                                    $sql = "SELECT * FROM `the_firm`";
                                    $query = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_assoc($query)) {
                                  
                                 ?>
                                <li><a href="shop.php?id_the_firm=<?php echo $row['id_the_firm'] ?>"><?php echo $row['name']; ?></a></li>
                            <?php } ?>
       <!-- -------------------------------END------------------------------------------ -->
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
            <!-- -------------------------------Latest Products------------------------------------------ -->                        <?php 
                                        $sql = "SELECT * FROM `product` ORDER BY id_product DESC LIMIT 3";
                                        $query = mysqli_query($conn,$sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
                                     ?>
                                    <div class="clothing_item">
                                        <img src="<?php echo $row['image'] ?>" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="product.php?id_product=<?php echo $row['id_product'] ?>"><?php echo $row['name']; ?></a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p><?php echo number_format($row['price']); ?></p>
                                        </div>
                                    </div>
                                   <?php } ?>
             <!-- -------------------------------END------------------------------------------ -->                   </div>
                                
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
                <!-- -----------------------------ĐỖ DỮ LIỆU PRODUCT--------------------- -->
                <?php 
                    //query select mysql
                    $sql = "SELECT * FROM `product` ORDER BY id_product DESC";
                    if(isset($_GET['id_category'])){
                        $sql = "SELECT * FROM `product` WHERE `id_category` = '".$_GET['id_category']."' ORDER BY id_product DESC";
                    }
                    if(isset($_GET['id_color'])){
                        $sql = "SELECT * FROM `product` WHERE `id_color` = '".$_GET['id_color']."' ORDER BY id_product DESC"; 
                    }
                    
                    if(isset($_GET['id_the_firm'])){
                        $sql = "SELECT * FROM `product` WHERE `id_the_firm` = '".$_GET['id_the_firm']."' ORDER BY id_product DESC"; 
                    }

                    if(isset($_GET['input_search'])){
                        $sql = "SELECT * FROM `product` WHERE `name` LIKE '%".$_GET['input_search']."%' ORDER BY `id_product` DESC ";
                         $query = mysqli_query($conn,$sql);
                         if (mysqli_num_rows($query) == 0) {
                            echo "<script language='javascript'>";
                            echo "alert('No products found ');";
                            echo "window.location='shop.php';";
                            echo "</script>";
                         }
                    }
                    $query = mysqli_query($conn,$sql); // thực thi sql
                    while ($row = mysqli_fetch_assoc($query)) { // lặp dữ liệu
                    
                 ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768" style="margin-top: 25px">
                                                <a  ><img src="<?php echo $row['image'] ?>" alt="" /></a>
                                                <div class="product_details">
                                                    <h2 class="ellipsis"><?php echo $row['name']; ?></h2>
                                                    <p><span class="popular_price"><?php echo number_format($row['price']); ?> VND</span></p>
                                                    <style type="text/css">
                                                        .ellipsis {
                                                        white-space: nowrap;
                                                        text-overflow: ellipsis;
                                                        overflow: hidden;
                                                        }
                                                     </style>
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
                                                            <a href="product.php?id_product=<?php echo $row['id_product'] ?>" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <i class="far fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                <!-- -----------------------------ENDPRODUCT--------------------- -->
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