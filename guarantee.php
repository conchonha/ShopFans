<?php session_start();
include 'handling/utils/connect.php';
//lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include. -->?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Guarantee</title>
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
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style  -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS ============================================ -->
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
    <!--Start Header Top area -->

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
                   
                        <div class="search_box ">
                            <input id="abc" class="input_text" type="text" placeholder="Search" />
                            <button onclick="search()" type="submit" class="btn-search">
                                    <span><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    <script type="text/javascript">
                            function search() {
                                //lấy giá trị ô input ra
                            var s = document.getElementById("abc").value;
                                //lấy input_search + chuyển trang index
                             window.location='index.php?input_search='+s+'&btn_search=btn_search';
                           }
                        </script>
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
                        <!-- ------------------------------------------CART----------------------------- -->
                            <?php 
                            //kiểm tra xem người dùng đã đăng nhập trước đó chưa
                                    if ($_SESSION["iduser"] != null) {
                                        $iduser = $_SESSION["iduser"];
                                        $sql = "SELECT * FROM `cart` WHERE Id_user = $iduser";
                                        $query = mysqli_query($conn,$sql);
                                       
                                           
                             ?>
                                    <span class="cart_zero"><?php echo mysqli_num_rows($query); ?></span>
                                </a>
                                <div class="cart_down_area">
              <?php  while ($row = mysqli_fetch_assoc($query)) { ?>
                                    <div class="cart_single">
                                        <a href="product.php?id_product=<?php echo $row['id_product']; ?>"><img src="<?php echo $row['image']; ?>" alt="" width="30%" /></a>
                                        <h2 class="ellipsis"><a href="product.php?id_product=<?php echo $row['id_product']; ?>"><?php echo $row['name_product']; ?></a></h2>
                                           <style type="text/css">
                                                .ellipsis {
                                                white-space: nowrap;
                                                text-overflow: ellipsis;
                                                overflow: hidden;
                                                }
                                            </style>
                                        <p><?php echo ceil($row['price']*0.00004); ?> $</p>
                                    </div>
                            <?php  }
                                    }else {
                                        //show alert + điều hướng đến trang login
                                        echo "<script language='javascript'>";
                                        echo "alert('Please login...');";
                                        echo "window.location='my-account.php';";
                                        echo "</script>";
                             } ?>
        <!-- ------------------------END ----------------------- -->   
                                
                                    <div class="cart_shoptings">
                                        <a href="cart.php" class="cart_shoptings-link">Buy now</a>
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
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Ceiling Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Tower Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Misting Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Steam Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Stand Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Wall Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Box Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Exhaust Fan</a>
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
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single blog_top_area">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><span>Ι</span></li>
                            <li>Guarantee</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start single blog area -->
    <div class="blog_post_area_baohanh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                    <div class="blog_right_sidebar">
                        <h2 class="sp_module_title"><span>news</span></h2>
                        <div class="sub_area">
                            <p><b>Enter email to receive the latest notifications</b></p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <input type="submit" class="guarantee" value="Sign up">
                            </form>
                        </div>
                        <div class="latest_posts">
                            <h3 class="sp_module_title sp_module_title_rv"><span>latest posts</span></h3>
                            <div class="single_l_post">
                                <a href="#">1. Where can I get a warranty ?</a>
                                <p><i>&emsp;( 31/05/2020 )</i></p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">2. Can I get a free warranty ?</a>
                                <p><i>&emsp;( 31/05/2020 )</i></p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">3. How long can I get back the warranty product ?</a>
                                <p><i>&emsp;( 29/04/2020 )</i></p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">4. Fanofan Company warranty form</a>
                                <p><i>&emsp;( 20/03/2020 )</i></p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">5. Product return policy</a>
                                <p><i>&emsp;( 09/07/2019 )</i></p>
                            </div>
                        </div>
                        <div class="latest_posts">
                            <h3 class="sp_module_title sp_module_title_rv"><span>BEST SELLER 2020</span></h3>
                            <div class="add_r_sidebar">
                                <p class="banner_block">
                                    <a href="#"><img alt="" src="images/baohanh2.png" width="100%" height="350px"></a>
                                </p>
                            </div>
                            <div class="add_r_sidebar">
                                <p class="banner_block">
                                    <a href="#"><img alt="" src="images/baohanh3.png" width="100%" height="350px"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                    <div class="carousel_testimonial_area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="testimonial_list">
                                        <div class="testimonial_single testimonial_single1">
                                            <img src="images/a (5).jpg" alt="" class="banner" width="100%" />
                                        </div>
                                        <div class="testimonial_single testimonial_single1">
                                            <img src="images/a (4).jpg" alt="" class="banner" width="100%" />
                                        </div>
                                        <div class="testimonial_single testimonial_single1">
                                            <img src="images/a (3).jpg" alt="" class="banner" width="100%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_details_area">
                        <i class="fas fa-tools"></i>
                        <div class="blog_details_list">
                            <ul class="blog_author">
                                <li><i class="fa fa-eye"></i><b>Views: 25.654</b></li>
                                <li>
                                    <div class="star_blog">
                                        <b>Evaluate:</b>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-alt"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_info_details">
                            <h2><a class="blog_info_heading" href="#">Where can I get a warranty ?</a></h2>
                            <p class="blog_paragrap_style">Genuine warranty: customers can bring products directly to the company for warranty without going through the Center.</p>
                            <p class="blog_paragrap_style">The warranty location is specified in the warranty card accompanying the product. Please contact the Supplier / Distributor's Service Center directly according to the information in the warranty card. Customer care support
                                will support to guide customers how to go to outside warranty centers of manufacturers, distributors to participate in the product and service warranty system. All Supplier Supplier information is included on the delivery
                                receipt / invoice included in the package.</p>
                            <blockquote>
                                <p>If you have difficulty contacting a Service Center, please contact our Customer Care at info@laviewater.com or hotline <b>1900 1906</b> for assistance.</p>
                            </blockquote>
                            <p class="blog_paragrap_style">In any case, the product warranty period depends on the Warranty Center's policy and / or availability of replacement equipment / products and will be specifically notified to you at the time Warranty Center point to receive
                                products for warranty in case you bring the product to the Warranty Center by yourself; or as soon as we receive notice of warranty period in case you carry out product warranty through Customer Support. In any case, We
                                are not responsible for any damage or loss if you do not follow the instructions in this Warranty Policy.</p>

                            <p class="blog_paragrap_style">We will repair or replace the customer with an equivalent product free of charge. We will only accept a warranty for customers in case the product has been used in accordance with the instructions provided, without damage due
                                to misuse, abuse or negligence. In case of a warranty claim, the customer will be required to provide a purchase invoice (from FanoFan or from an authorized dealer) and phone number to activate electronic warranty, or electronic
                                warranty stamp in in case the customer has not activated.</p>
                        </div>
                    </div>
                    <div class="blog_social_icon">
                        <img src="img/social/shareicon.png" alt="" />

                        <div class="comment d-flex align-items-center">
                            <img src="images/ava4.png" alt="" width="7%">
                            <h3>Taylor Swift :</h3>
                            <span>I very very like products of FanoFan, it's too quality !</span>
                        </div>

                        <div class="comment d-flex align-items-center">
                            <img src="images/ava6.png" alt="" width="7%">
                            <h3> Cristiano Ronaldo : </h3>
                            <span>Products at here help me feel extremely cool and comfortable after stressful football matches, that's great !</span>
                        </div>

                        <div class="comment d-flex align-items-center">
                            <img src="images/ava3.png" alt="" width="7%">
                            <h3> Snoop Dogg : </h3>
                            <span>Shout out to everyone: Good job !</span>
                        </div>

                    </div>
                    <div class="blog_add_comment_area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comment_text">
                                    <h2>Comment</h2>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="comment_name">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="comment_email">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment_title">
                                    <input type="text" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment_textarea">
                                    <textarea cols="65" rows="8" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send_button">
                                    <a href="">Send</a>
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
    <!--End single blog area -->

    <!--Start Footer area -->

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
                                <li><a href="https://goo.gl/maps/VfWGFaUo5x4Cz65g6">1 Le Dai Hanh, Ward 11, <br>District 11, Ho Chi Minh City</li>
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
    <script src="js/nivo-plugin.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- carousel JS  -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS  -->
    <script src="js/plugins.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
    <script src="js/display.js"></script>
</body>

</html>