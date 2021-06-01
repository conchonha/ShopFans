<?php 
	$conn = mysqli_connect("localhost", "root", "", "fan_shop");
	mysqli_set_charset($conn, "UTF8");
	//include lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh
	echo $_POST['loadMoreNewCount']."---------------------------------------------------"; 
	$loadMoreNewCount =  isset($_POST['loadMoreNewCount'])? $_POST['loadMoreNewCount'] : 8; //lay so luong item product seemore
	
   
    //kiểm tra khi người dùng bấm tìm kiếm + seemore tìm kiếm
    if(isset($_GET['btn_search'])){
    	if($_GET['btn_search'] == 'btn_search'){
    		$search = isset($_GET['input_search'])? $_GET['input_search'] : '';
	    	//query search
	    	$sql = "SELECT * FROM `product` WHERE `name` LIKE '%".$search."%' ORDER BY `id_product` DESC LIMIT $loadMoreNewCount";
	    	$data = mysqli_query($conn,$sql); //enforcement query seach
	    	// nếu dữ liệu tìm kiếm rỗng -> quay về  query select * from + show alert
	    	load($data);
	    	return;
    	}
    }

    //kiểm tra khi người dùng bấm seemore trang chủ
	if(isset($_GET['btn_seemore'])){
		if($_GET['btn_seemore'] == 'btn_seemore'){
			 //query seemore
    		$sql = "SELECT * FROM `product` ORDER BY id_product DESC LIMIT $loadMoreNewCount";
    		$data = mysqli_query($conn,$sql); //enforcement query seemore
    		load($data);
    		return;
		}
	}

   
    ?>
    <?php 
     function load($data){
	    // $data = mysqli_query($conn,$sql); //thực thi sql
	        while ($row = mysqli_fetch_assoc($data)) { //lặp dữ liệu + đổ data -> view    
	        ?>
	 
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	            <div class="product_list">
	                <div class="single_product">
	                    <a href="product.php" ><img src="<?php echo $row['image']; ?>" alt="" width="100%" style="height: 250.58px;" /></a>
	                    <div class="product_details">
	                        <h2><?php echo $row['name']; ?></h2>  <!-- show name product -->
	                        <p><span class="popular_price"><?php
	                         echo number_format($row['price']); ?> VND  <!-- đổ price product -->
	                     </span></p>
	                    </div>
	                    <div class="product_detail">
	                        <div class="star_icon">
	                            <i class="fa fa-star"></i>
	                            <i class="fa fa-star"></i>
	                            <i class="fa fa-star"></i>
	                            <i class="fa fa-star"></i>
	                            <i class="fa fa-star"></i>
	                        </div>
	                        <div class="product_button">
	                            <div class="cart_details">
	                                <a href="cart.php" ><i class="fas fa-shopping-cart"></i> Add to Cart </a>
	                            </div>

	                            <div class="cart_details">
	                                <i class="far fa-heart"></i>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
  <?php } }?>
