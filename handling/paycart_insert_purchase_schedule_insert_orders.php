<?php 
session_start();
include 'utils/connect.php';

$iduser=$_SESSION["iduser"];

//inser oders
//b1. select * from cart
$sqlgiohang="SELECT * FROM `cart` where Id_user ='$iduser'";
//nếu tồn tại sp trong giỏ hàng thì tiếp tục 
$datagiohang=mysqli_query($conn,$sqlgiohang);
    if(mysqli_num_rows($datagiohang) > 0){
    //lấy ngày hiện tại
    $date = getdate();
    $ngayhientai=$date['year']."-".$date['mon']."-".$date['mday'];
    $status="0";
    
    // inser purchase_schedule
    $sql_purchase_schedule="INSERT INTO `purchase_schedule`(`booking_date`, `status`, `id_user`) VALUES ('$ngayhientai','$status','$iduser')";
    mysqli_query($conn,$sql_purchase_schedule);

    // lay id don dat hang vua them vào purchase_schedule de them vao bang oders
    $sql_purchase_schedule="SELECT * FROM purchase_schedule ORDER BY id_purchase_schedule DESC LIMIT 1";
    $query_purchase_schedule=mysqli_query($conn,$sql_purchase_schedule);
    $resul=mysqli_fetch_assoc($query_purchase_schedule);

    //đọc dữ liệu từ bảng cart
    while ($row=mysqli_fetch_assoc($datagiohang)) {
	    	//láy dữ liệu tu bang cart
	        $id_product=$row['id_product'];
	        $price_product=$row['price'];
	        $image_product=$row['image'];
	        $number_product=$row['number'];
	        $name_product=$row['name_product'];

	        //id purchase_schedule được thêm vào cuối
	        $id_purchase_schedule=$resul['id_purchase_schedule'];
	    
	    	//sql insert oder
	        $sqlchitietdondathang="INSERT INTO `orders`( `id_product`, `price`, `number`, `image`, `id_purchase_schedule`,`name`) VALUES ('$id_product','$price_product','$number_product','$image_product','$id_purchase_schedule','$name_product') ";
	        //thuc thi insert oder
            $datachitietdondathang=mysqli_query($conn,$sqlchitietdondathang);
        }
        
        //delete toàn bộ sp trong bảng cart nếu có Id_user='$iduser'
        $sql_clear_cart="DELETE FROM `cart` WHERE Id_user='$iduser'";
        $query_clear_cart=mysqli_query($conn,$sql_clear_cart);
       
       //chuyển đến trang bill
   		echo "<script language='javascript'>";
        echo "alert('Your order has been sent ');";
        echo "window.location='../bill.php?id_purchase_schedule=".$id_purchase_schedule."'";
        echo "</script>";
}else{
	 // thông báo ko có sp trong giot hàng và trở lại
	echo "<script language='javascript'>";
   	echo "alert('Cart is empty, cannot proceed to checkout ');";
    echo "window.location='../cart.php'";
    echo "</script>";
}



 ?>