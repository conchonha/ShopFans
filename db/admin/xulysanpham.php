<?php
	include('../../db/connect.php');
?>
<?php
	if(isset($_POST['themsanpham'])){
		$tensanpham = $_POST['tensanpham'];
		$hinhanh = $_FILES['hinhanh']['name'];
		
		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$danhmuc = $_POST['danhmuc'];
		$mota = $_POST['mota'];
		$path = '../../uploads/';
		
		$image = "https://localhost/WebBanQuat/uploads/".$hinhanh;
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
		
		$sql_insert_product = mysqli_query($con,"INSERT INTO product(name,description,price,total_number,image,id_category,array_image_description) values ('$tensanpham','$mota','$gia','$soluong','$image','$danhmuc','$image')");
		move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	}elseif(isset($_POST['capnhatsanpham'])) {
		$id_update = $_POST['id_update'];
		$tensanpham = $_POST['tensanpham'];
		$hinhanh = $_FILES['hinhanh']['name'];
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$danhmuc = $_POST['danhmuc'];
		$mota = $_POST['mota'];
		$path = '../../uploads/';
		$image = "https://localhost/WebBanQuat/uploads/".$hinhanh;

		if($hinhanh==''){
			$sql_update_image = "UPDATE product SET name='$tensanpham',description='$mota',price='$gia',total_number='$soluong',id_category='$danhmuc' WHERE id_product='$id_update'";
		}else{
			move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
			$sql_update_image = "UPDATE product SET name='$tensanpham',description='$mota',price='$gia',total_number='$soluong',image='$image',id_category ='$danhmuc' WHERE id_product ='$id_update'";
		}
		mysqli_query($con,$sql_update_image);
	}
	
?> 
<?php
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($con,"DELETE FROM product WHERE id_product='$id'");
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="xulydonhang.php">Order <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulydanhmuc.php">Category</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulysanpham.php">Product</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="xulykhachhang.php">Customer</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br>
	<div class="container">
		<div class="row">
		<?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['capnhat_id'];
				$sql_capnhat = mysqli_query($con,"SELECT * FROM product WHERE id_product ='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				$id_category_1 = $row_capnhat['id_category'];
				?>
				<div class="col-md-4">
				<h4>Update Product</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Name</label>
					<input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['name'] ?>"><br>
					<input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['id_product'] ?>">
					<label>Image</label>
					<input type="file" class="form-control" name="hinhanh"><br>
					<img src="<?php echo $row_capnhat['image'] ?>" height="80" width="80"><br>
					<label>Price</label>
					<input type="text" class="form-control" name="giasanpham" value="<?php echo $row_capnhat['price'] ?>"><br>
					<label>Number</label>
					<input type="text" class="form-control" name="soluong" value="<?php echo $row_capnhat['total_number'] ?>"><br>
					<label>Description</label>
					<textarea class="form-control" rows="10" name="mota"><?php echo $row_capnhat['description'] ?></textarea><br>
					<label>Category</label>
					<?php
					$sql_danhmuc = mysqli_query($con,"SELECT * FROM category ORDER BY id_category DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Choice Category-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
							if($id_category_1==$row_danhmuc['id_category']){
						?>
						<option selected value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name'] ?></option>
						<?php 
							}else{
						?>
						<option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name'] ?></option>
						<?php
							}
						}
						?>
					</select><br>
					<input type="submit" name="capnhatsanpham" value="Update Product" class="btn btn-default">
				</form>
				</div>
			<?php
			}else{
				?> 
				<div class="col-md-4">
				<h4>Add Product</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Name</label>
					<input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm"><br>
					<label>Image</label>
					<input type="file" class="form-control" name="hinhanh"><br>
					<label>Price</label>
					<input type="text" class="form-control" name="giasanpham" placeholder="Giá sản phẩm"><br>
					<label>Number</label>
					<input type="text" class="form-control" name="soluong" placeholder="Số lượng"><br>
					<label>Description</label>
					<textarea class="form-control" name="mota"></textarea><br>
					<label>Category</label>
					<?php
					$sql_danhmuc = mysqli_query($con,"SELECT * FROM category ORDER BY id_category DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Choose Category-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name'] ?></option>
						<?php 
						}
						?>
					</select><br>
					<input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-default">
				</form>
				</div>
				<?php
			} 
			
				?>
			<div class="col-md-8">
				<h4>List Product</h4>
				<?php
				$sql_select_sp = mysqli_query($con,"SELECT * FROM `product`,category WHERE product.id_category = category.id_category ORDER BY product.id_product DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Numerical</th>
						<th>Name</th>
						<th>Image</th>
						<th>Number</th>
						<th>Category</th>
						<th>Price</th>
						<th>Manage</th>
					</tr>
					<?php
					$i = 0;
					while($row_sp = mysqli_fetch_array($sql_select_sp)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row_sp[1] ?></td>
						<td><img src="<?php echo $row_sp['image']; ?>" height="100" width="80"></td>
						<td><?php echo $row_sp['total_number'] ?></td>
						<td><?php echo $row_sp[13] ?></td>
						<td><?php echo ceil(($row_sp['price'])* 0.00004) ?> $</td>
						<td><a href="?xoa=<?php echo $row_sp['id_product'] ?>">Delete</a> || <a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sp['id_product'] ?>">Update</a></td>
					</tr>
				<?php
					} 
					?> 
				</table>
			</div>
		</div>
	</div>
	<div style="height: 200px"></div>
	
</body>
</html>