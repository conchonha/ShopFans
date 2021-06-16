<?php
	include '../../db/connect.php';
?>
<?php 
if(isset($_POST['capnhatdonhang'])){
	$xuly = $_POST['xuly'];
	$mahang = $_POST['mahang_xuly'];
	$sql_update_donhang = mysqli_query($con,"UPDATE `purchase_schedule` SET `status`= '$xuly' WHERE id_purchase_schedule = '$mahang'");
}

?>
<?php
	if(isset($_GET['xoadonhang'])){
		$mahang = $_GET['xoadonhang'];
		$sql_delete = mysqli_query($con,"DELETE FROM purchase_schedule WHERE id_purchase_schedule='$mahang'");
		$sql_delete1 = mysqli_query($con,"DELETE FROM orders WHERE id_purchase_schedule='$mahang'");
		header('Location:xulydonhang.php');
	} 
	if(isset($_GET['xacnhanhuy'])&& isset($_GET['mahang'])){
		$huydon = $_GET['xacnhanhuy'];
		$magiaodich = $_GET['mahang'];
	}else{
		$huydon = '';
		$magiaodich = '';
	}
	$sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn hàng</title>
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
	<div class="container-fluid">
		<div class="row">
			 <?php
			if(isset($_GET['quanly'])=='xemdonhang'){
				$mahang = $_GET['mahang'];
				$sql_chitiet = mysqli_query($con,"SELECT * FROM orders INNER JOIN purchase_schedule ON purchase_schedule.id_purchase_schedule = orders.id_purchase_schedule AND purchase_schedule.id_purchase_schedule = '$mahang'");
				?>
				<div class="col-md-6">
				<p>View order details</p>
			<form action="" method="POST">
				<table class="table table-bordered ">
					<tr>
						<th>Numerical Order</th>
						<th>Code Product</th>
						<th>Name</th>
						<th>Number</th>
						<th>Price</th>
						<th>Day</th>

						
						<!-- <th>Quản lý</th> -->
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_chitiet)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_donhang['id_orders']; ?></td>
						
						<td><?php echo $row_donhang['name']; ?></td>
						<td><?php echo $row_donhang['number']; ?></td>
						<td><?php echo ceil((($row_donhang['price']) * 0.00004)); ?> $</td>
						
						<td><?php echo $row_donhang['booking_date'] ?></td>
						<input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['id_purchase_schedule'] ?>">
					</tr>
					 <?php
					} 
					?> 
				</table>

				<select class="form-control" name="xuly">
					<option value="1">is already handle | Delivery</option>
					<option value="0">not handle</option>
				</select><br>

				<input type="submit" value="Update Order" name="capnhatdonhang" class="btn btn-success">
			</form>
				</div>  
			<?php
			}else{
				?> 
				
				<div class="col-md-7">
					<p>Order</p>
				</div>  
				<?php
			} 
			
				?> 
			<div class="col-md-6">
				<h4>Order Listing</h4>
				<?php
				$sql_select = mysqli_query($con,"SELECT * FROM `orders` JOIN purchase_schedule ON orders.id_purchase_schedule = purchase_schedule.id_purchase_schedule JOIN user ON user.id = purchase_schedule.id_user ORDER BY purchase_schedule.booking_date DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Numerical Order</th>
						<th>Code Product</th>
						<th>Status</th>
						<th>User Name</th>
						<th>Day</th>
						<th>Manage</th>
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['id_orders']; ?></td>
						<td><?php
							if($row_donhang['status']==0){
								echo 'not handle';
							}else{
								echo 'is already handle';
							}
						?></td>
						<td><?php echo $row_donhang['name']; ?></td>
						
						<td><?php echo $row_donhang['booking_date'] ?></td>

						<td><a href="?xoadonhang=<?php echo $row_donhang['id_purchase_schedule'] ?>">Delete</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['id_purchase_schedule'] ?>">see </a></td>
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