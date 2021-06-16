<?php 
    session_start(); //làm việc với session
    include 'handling/utils/connect.php'; 
    //lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ceiling Fans</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
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
    <!-- breadcrumbs area -->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single breadcrumb_top">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><span>I</span></li>
                            <li>Ceiling Fans</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumbs area -->
    <div class="container-fuild">
        <div class="row">
            <div class="col-lg-2">
                <div class="catagory_price_color" style="margin-left: 10px;">
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
                <div class="popular_tag_area" style="margin-left: 10px;">
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
                <div class="row" style="margin-left: 10px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;">
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
                                            <h2 class="ellipsis"><a href="product.php?id_product=<?php echo $row['id_product'] ?>"><?php echo $row['name']; ?></a></h2>
                                            <style type="text/css">
                                                        .ellipsis {
                                                        white-space: nowrap;
                                                        text-overflow: ellipsis;
                                                        overflow: hidden;
                                                        
                                                        }
                                                     </style>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p><?php echo ceil((($row['price'])*0.00004))." $"; ?></p>
                                        </div>
                                    </div>
                                   <?php } ?>
             <!-- -------------------------------END------------------------------------------ -->                   </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <!-- Start preview Product details area -->
                <?php 
                    //kiểm tra + lấy id product được gửi qua
                    if(isset($_GET['id_product'])){
                        $idsp = $_GET['id_product']; //lấy giá trị id_product
                        $sql = "SELECT * FROM `product` WHERE id_product = $idsp"; //sql lấy sp dựa vào id product
                        $query = mysqli_query($conn,$sql); //thực thi sql
                        $row = mysqli_fetch_assoc($query); //đọc dữ liệu
                        $arrayImage = explode("@", $row['array_image_description']); // cắt chuỗi hình ảnh mô tả
                    }
                 ?>
                <div class="blog_single_view_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="my_tabs">
                                    <div class="tab-content tab_content_style">
                                        <div id="tab1" class="tab-pane fade in active">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="<?php echo $arrayImage[0]; ?>" data-fancybox-group="gallery" title="">
                                                    <img src="<?php echo $arrayImage[0]; ?>" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div id="tab2" class="tab-pane fade">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="<?php echo $arrayImage[1]; ?>" data-fancybox-group="gallery" title="">
                                                    <img src="<?php echo $arrayImage[1]; ?>" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div id="tab3" class="tab-pane fade">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="<?php echo $arrayImage[2]; ?>" data-fancybox-group="gallery" title="">
                                                    <img src="<?php echo $arrayImage[2]; ?>" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div id="tab4" class="tab-pane fade">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="<?php echo $arrayImage[3]; ?>" data-fancybox-group="gallery" title="">
                                                    <img src="<?php echo $arrayImage[3]; ?>" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog_view_list">
                                        <ul class="tab_style tab_bottom">
                                            <li class="active">
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab1"><img src="<?php echo $arrayImage[0]; ?>" alt="" width="128px" height="153px" /></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab2"><img src="<?php echo $arrayImage[1]; ?>" alt="" width="128px" height="153px" /></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab3"><img src="<?php echo $arrayImage[2]; ?>" alt="" width="128px" height="153px" /></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab4"><img src="<?php echo $arrayImage[3]; ?>" alt="" width="128px" height="153px" /></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="my_deal">
                                    <a href="product.php?buy_now=buy_now&id_product=<?php echo $idsp; ?>"><button> BUY NOW <br><span class="btn_buy">Deliver to home</span></button></a>
                                    <img src="./images/deals.png" width="100%" alt="">
           <!-- -------------------------------------------SỬ LÍ THÊM GIỎ HÀNG-------------------------- -->
                                                    <?php
                                // nếu tồn tại buy_now nghĩa là nguwoif dùng bấm mua'
                                if (isset($_GET['buy_now'])) {
                                    //kiểm tra xem người dùng đã đăng nhập trước đó chưa
                                    if ($_SESSION["iduser"] != null) {
                                        $iduser   = $_SESSION['iduser'];
                                        //kiem tra don hang da tồn tại trước đó chưa
                                        $sql_cu   = "SELECT * FROM `cart` WHERE `id_product` = '$idsp' AND `Id_user` = '$iduser'";
                                        $query_cu = mysqli_query($conn, $sql_cu);
                                        if (mysqli_num_rows($query_cu) > 0) {
                                            $row_cu     = mysqli_fetch_assoc($query_cu);
                                            //update lại số lượng + giá tiền cho sản phẩm đó
                                            $price_moi  = $row_cu['price'] + $row['price'];
                                            $number_moi = $row_cu['number'] + 1;
                                            $sql_update = "UPDATE `cart` SET `price`='$price_moi',`number`='$number_moi' WHERE id_product = $idsp AND Id_user = '$iduser' ";
                                            $query_moi  = mysqli_query($conn, $sql_update);
                                            if ($query_moi) {
                                                //show alert + điều hướng đến trang cart
                                                echo "<script language='javascript'>";
                                                echo "alert('UPDATE CART SUCCESSFULLY');";
                                                echo "window.location='cart.php';";
                                                echo "</script>";
                                            } else {
                                                //show alert + điều hướng đến trang cart
                                                echo "<script language='javascript'>";
                                                echo "alert('UPDATE CART ERROR PLEASE TRY AGAIN');";
                                                echo "window.location='cart.php';";
                                                echo "</script>";
                                            }
                                        } else {
                                            //query insert cart
                                            $sql_insert   = "INSERT INTO `cart`( `Id_user`, `id_product`, `name_product`, `price`, `number`, `image`) VALUES ('" . $_SESSION['iduser'] . "','$idsp','" . $row['name'] . "','" . $row['price'] . "',1,'" . $row['image'] . "')";
                                            $query_insert = mysqli_query($conn, $sql_insert); //thuc thi query
                                            
                                            if ($query_insert) { //thanh cong
                                                //show alert + điều hướng đến trang cart
                                                echo "<script language='javascript'>";
                                                echo "alert('INSERT CART SUCCESSFULLY');";
                                                echo "window.location='cart.php';";
                                                echo "</script>";
                                            } else { //that bai
                                                //show alert + báo lỗi 
                                                echo "<script language='javascript'>";
                                                echo "alert('INSERT CART ERROR PLEASE TRY AGAIN');";
                                                echo "window.location='product.php?id_product=$idsp'";
                                                echo "</script>";
                                            }
                                        }
                                        
                                    } else {
                                        //show alert + điều hướng đến trang login
                                        echo "<script language='javascript'>";
                                        echo "alert('Please login...');";
                                        echo "window.location='my-account.php';";
                                        echo "</script>";
                                    }
                                }
                                ?>
                   <!------- -------------------------------------------END-------------------------- --> 
 
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog_product_details">
                                    <h2 class="blog_heading"><a href=""><?php echo $row['name']; ?></a></h2>
                                    <div class="product_rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product_rating">
                                        <a href="#">26 Comment /</a><span class="in-stock"> In stock</span>
                                    </div>
                                    <div class="pricing_rate">
                                        <div class="d-flex align-items-center">
                                            <p class="rating_dollor rating_margin"><span class="rating_value_two"><?php echo ceil((($row['price'])*0.00004))." $"; ?></span></p>
                                            <div class="product_blog_button d-flex">
                                                <div class="cart_blog_details blog_icon_border">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                                <div class="cart_blog_details blog_icon_border">
                                                    <a href="product.php?buy_now=buy_now&id_product=<?php echo $idsp; ?>" target="heart"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                                <script>
                                                    var heart = document.querySelector('.cart_blog_details  .far')

                                                    heart.addEventListener('click', function() {
                                                        heart.classList.toggle('fa');
                                                        heart.style.color = 'red'
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                        <p class="blog_texts">
                                            <p class="about-this-item"><b>About this item</b></p>
                                            <ul class="aboutthisitem">
                                                <?php echo $row['description']; ?>
                                            </ul>
                                        </p>
                                    </div>

                                </div>
                                <div class="product_options_area">
                                    <img src="./images/ceiling.png" width="100%" height="355px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End preview Product details area -->
                <!-- Start Product details tabs area -->
                <div class="product_collateral_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="my_tabs_description">
                                    <ul class="tab_style">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab-1">Product Details</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab-2">Comment</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab_content_style">
                                        <div id="tab-1" class="tab-pane fade in active">
                                            <div class="parameter">
                                                <div class="col-lg-8">
                                                    <h2>Specifications</h2>
                     <!-- ---------------------------Specifications----------------------------- -->
                                                    <?php 
                                                    //query select specifications
                                                        $sql = "SELECT * FROM `specifications` WHERE id_specifications = $idsp";
                                                        $query1 = mysqli_query($conn,$sql); //thuc thi sql
                                                        $row1 = mysqli_fetch_assoc($query1); //lay du lieu
                                                     ?>
                     <!-- ---------------------------END----------------------------- -->
                                                    <table class="table table-bordered  table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>Area used</td>
                                                                <td><?php echo $row1['area_used']; ?></td>

                                                            </tr>
                                                            <tr>
                                                                <td>Voltage</td>
                                                                <td><?php echo $row1['voltage']; ?></td>

                                                            </tr>
                                                            <tr>
                                                                <td>Wattage</td>
                                                                <td><?php echo $row1['wattage']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Wind speed</td>
                                                                <td> <?php echo $row1['wind_speed']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Number of propellers</td>
                                                                <td><?php echo $row1['number_of_propellers']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>propeller material</td>
                                                                <td><?php echo $row1['propeller_material']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Control</td>
                                                                <td><?php echo $row1['control']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Fan diameter</td>
                                                                <td><?php echo $row1['fan_diameter']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Lamp wattage</td>
                                                                <td><?php echo $row1['lamp_wattage']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Brand</td>
                                                                <td><?php echo $row1['brand']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Made in</td>
                                                                <td><?php echo $row1['made_in']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Guarantee</td>
                                                                <td><?php echo $row1['guarantee']; ?></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h2>News</h2>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/product (2).jpg" width="100%" alt="">
                                                        <span>How to properly maintain and clean the fan</span>
                                                    </div>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/homepro2.png" width="100%" alt="">
                                                        <span>How to properly maintain and clean the fan</span>
                                                    </div>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/homepro.png" width="100%" alt="">
                                                        <span>How to properly maintain and clean the fan</span>
                                                    </div>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/homepro1.png" width="100%" alt="">
                                                        <span>How to properly maintain and clean the fan</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2" class="tab-pane fade">
                                            <div class="product_description">
                                                <ul id="Motorola">
                                                    <li>
                                                        <img src="images/ava3.png" width="7%" alt="">
                                                        <img src="images/ava4.png" width="7%" alt="">
                                                        <img src="images/ava6.png" width="7%" alt="">
                                                        <span><b>Taylor Swift</b> and 7,268 orther peoples commented</span>
                                                    </li>
                                                    <li>
                                                        <span>Quality :</span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <span>Price &emsp;:</span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </li>

                                                    <li>
                                                        <span>Service :</span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </li>

                                                </ul>
                                                <div class="fieldsets">
                                                    <h3><b>How would you rate ?</b></h3>
                                                    <div class="start_tab_pricing_area">
                                                        <fieldset>
                                                            <table class="star_pricing_tb">
                                                                <tr>
                                                                    <th> <i class="fa fa-star"></i> </th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Quality</td>
                                                                    <td><input type="radio" name="ratings[1]" value="1" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="2" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="3" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="4" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="5" class="radio"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price</td>
                                                                    <td><input type="radio" name="ratings[2]" value="6" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="7" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="8" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="9" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="10" class="radio"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service</td>
                                                                    <td><input type="radio" name="ratings[3]" value="11" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="12" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="13" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="14" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="15" class="radio"></td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
                                                    </div>

                                                    <div class="rating_contact">
                                                        <ul id="review_contact">
                                                            <li>Name <span>*</span></li>
                                                            <li><input type="text" name="nickname" class="input-text required-entry" value=""></li>
                                                            <li>Comment <span>*</span></li>
                                                            <li><textarea name="detail" cols="5" rows="3" class="required-entry"></textarea></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review_button">
                                                        <button type="submit" title="Submit Review" class="button">Complete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product details tabs area -->
                <!-- Start Related products area -->
                <div class="related_products_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="feature_text feature_upsell">
                                    <h4>Similar Products</h4>
                                </div>
                                <div class="row">
                                    <div class="upsell_product_list">
            <!--------------------------------------Similar Products--------------------------  -->
                                    <?php 
                                        $id_category = $row['id_category']; // lay id_category 
                                        //lấy những sản phẩm liên quan dựa vào  id_category
                                        $sql2 = "SELECT * FROM `product` WHERE id_category = $id_category";
                                        $query = mysqli_query($conn,$sql2);

                                        $row = mysqli_fetch_assoc($query);
                                     ?>
                                        <div class="col-lg-3">
                                            <div class="single_upsell">
                                                <a href="#"><img src="<?php echo $row['image'] ?>" alt="" /></a>
                                                <div class="upsell_details">
                                                    <h2><a href=""><?php echo $row['name']; ?></a></h2>
                                                    <div class="text-center">
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">10 Comment </a>
                                                        </div>
                                                    </div>
                                                    <p><?php echo ceil((($row['price'])*0.00004)); ?> $</p>
                                                </div>
                                            </div>
                                        </div>
              <!--------------------------------------END--------------------------  -->                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Related products area -->
            </div>
        </div>
    </div>
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
    <!-- jquery JS -->
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
    <!-- carousel JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS -->
    <script src="js/plugins.js"></script>
    <script src="js/display.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
</body>

</html>