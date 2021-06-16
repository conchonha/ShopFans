<?php 
session_start();
include 'handling/utils/connect.php';
$total = 0; 
?>
<!-- //lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include. -->
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon============================================ -->
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
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <div id="backtop">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </a>

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><span>Ι</span></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Shopping Cart top area -->
    <div class="shopping_cart_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text_cart">
                        <h1>Shopping Cart </h1>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="shopping-cart-table">
                        <table class="cart_items">
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th>Remove</th>
                            </tr>
         <!-- ------------------------ ĐỔ DỮ LIỆU GIỎ HÀNG ----------------------- -->                    
                            <?php 
                            //kiểm tra xem người dùng đã đăng nhập trước đó chưa
                                    if ($_SESSION["iduser"] != null) {
                                        $iduser = $_SESSION["iduser"];
                                        $sql = "SELECT * FROM `cart` WHERE Id_user = $iduser";
                                        $query = mysqli_query($conn,$sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
                                           $total += $row['price'];
                             ?>
                            <tr>
                                <td>
                                    <a href="product.php?id_product=<?php echo $row['id_product']; ?>"><img src="<?php echo $row['image'] ?>" alt="" width="40%" /></a>

                                </td>
                                <td>
                                    <h4><?php echo $row['name_product']; ?>
                                        <!-- <span>Category: Misting Fan</span> -->
                                    </h4>
                                </td>
                                <td><?php echo ceil((($row['price'])*0.00004)); ?> $</td>
                                <td><input id="<?php echo $row['id_product']; ?>" name="cart[390][qty]" value="<?php echo $row['number']; ?>" size="4" title="Qty" type="number" min="1" class="input-text qty" maxlength="12"></td>

                                <script type="text/javascript">
                                    //lắng nghe sự kiện phím enter update số lượng cart
                                    document.getElementById("<?php echo $row['id_product']; ?>")
                                        .addEventListener("keyup", function(event) {
                                        event.preventDefault();
                                        if (event.keyCode === 13) {
                                            //lấy giá trị ô input ra
                                            var s = document.getElementById("<?php echo $row['id_product']; ?>").value;
                                            //đẩy id_cart + số lượng mới do người dùng nhập lên đường dẫn để php sử lí
                                            window.location='cart.php?update=update_number&id_cart=<?php echo $row['id_cart'] ?>&input='+s;
                                        }
                                    });

                                </script>
                                <td>
                                    <a href="cart.php?delete=delete&id_cart=<?php echo $row['id_cart']; ?>">
                                        <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php  }
                                    }else {
                                        //show alert + điều hướng đến trang login
                                        echo "<script language='javascript'>";
                                        echo "alert('Please login...');";
                                        echo "window.location='my-account.php';";
                                        echo "</script>";
                                    } ?>
        <!-- ------------------------END ----------------------- -->    
                            
                        </table>
        <!-- ------------------------ SU LI UPDATE + DELETE----------------------- -->
                         <?php 
                                    //sử lí update số lượng cart php
                                    //kiểm tra có sự kiện update ko
                                    if(isset($_GET['update'])){
                                        if($_GET['update'] == "update_number" && $_GET['id_cart'] != null && $_GET['input'] != null && $_GET['input'] > 0){
                                            $id_cart = $_GET['id_cart']; //lấy id_cart cần update
                                            $inputNumber = $_GET['input']; // lấy số lượng mới
                                            $sql = "SELECT * FROM `cart` WHERE id_cart = $id_cart"; // lấy thông tin sp trong cart ra
                                            $query = mysqli_query($conn,$sql); //thực thi truy vấn
                                            $row1 = mysqli_fetch_assoc($query); // đọc dữ liệu
                                            $price_moi = ((($row1['price']) / ($row1['number'])) * $inputNumber); //giá tiền mới sau update
                                            
                                            //query update number cart
                                             $sql_update = "UPDATE `cart` SET `price`='$price_moi',`number`='$inputNumber' WHERE `id_cart` = '$id_cart'";
                                             $query_update = mysqli_query($conn,$sql_update);
                                             if($query_update){
                                                //dieu huong ve lai trang cart
                                                echo "<script language='javascript'>";
                                                echo "window.location='cart.php'";
                                                echo "</script>";
                                             }
                                        }else{
                                            //show alert 
                                            echo "<script language='javascript'>";
                                            echo "alert('Do not leave the product number blank');";
                                             echo "window.location='cart.php'";
                                            echo "</script>";
                                        }
                                    }

                                    //nếu tồn tại sự kiện delete và id_cart != null
                                    if(isset($_GET['delete']) && $_GET['id_cart'] != null){
                                        $id_cart = $_GET['id_cart']; // lấy id_cart
                                        $sql_delete = "DELETE FROM `cart` WHERE id_cart=$id_cart"; //query delete
                                        $query_delete = mysqli_query($conn,$sql_delete); //thực thi query delete
                                        if($query_delete){
                                            echo "<script language='javascript'>";
                                            echo "window.location='cart.php'";
                                             echo "</script>";
                                        }else{
                                            echo "<script language='javascript'>";
                                            echo "alert('Clear the error please try again later');";
                                             echo "window.location='cart.php'";
                                            echo "</script>";
                                        }
                                    }
                                 ?>
        <!-- ------------------------ END ----------------------- -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shopping-cart-table">
                        <table class="cart_items cart_items2">
                            <tr>
                                <th colspan="2">Order summary</th>
                            </tr>
                            <tr rowspan="2">
                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subtotal</td>
                                <td> <?php echo ceil(($total * 0.00004)); ?> $</td>
                            </tr>
                            <tr>
                                <td> Shipping</td>
                                <td> 2 $</td>
                            </tr>
                            <tr>
                                <td> Tax</td>
                                <td> 0 $</td>
                            </tr>
                            <tr>
                                <td> Total</td>
                                <td class="total_price"> <?php echo ceil((($total + 30000) * 0.00004)); ?> $</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="handling/paycart_insert_purchase_schedule_insert_orders.php">Pay</a></th>
                            </tr>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>© All rights reserved</center>
    <!--End Shopping Cart top area -->
    
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
    <!-- main JS  -->
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>