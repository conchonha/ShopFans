<?php
	include('../../db/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khách hàng</title>
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
			
			<div class="col-md-12">
				<h4>Customer</h4>
				<?php
				$sql_select_khachhang = mysqli_query($con,"SELECT * FROM user ORDER BY id DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Numerical</th>
						<th>Name Customer</th>
						<th>Phone Number</th>
						<th>Address</th>
						<th>Email</th>
						<th>Manager</th>
					</tr>
					<?php
					$i = 0;
					while($row_khachhang = mysqli_fetch_array($sql_select_khachhang)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_khachhang['name']; ?></td>
						<td><?php echo $row_khachhang['phone']; ?></td>
						<td><?php echo $row_khachhang['address']; ?></td>
						
						<td><?php echo $row_khachhang['email'] ?></td>
						<td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['id'] ?>">View transaction</a></td>
					</tr>
					 <?php
					} 
					?> 
				</table>
			</div>

			<div class="col-md-12">
				<h4>Listed Order History</h4>
				<?php
				if(isset($_GET['khachhang'])){
					$magiaodich = $_GET['khachhang'];
				}else{
					$magiaodich = '';
				}
				$sql_select = mysqli_query($con,"SELECT * FROM orders INNER JOIN purchase_schedule ON purchase_schedule.id_purchase_schedule = orders.id_purchase_schedule AND purchase_schedule.id_user = '$magiaodich'"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Numerical</th>
						<th>Order Code </th>
						<th>Product Name </th>
						<th>Image</th>
						<th>Day Order</th>
						
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['id_purchase_schedule']; ?></td>
					
						<td><?php echo $row_donhang['name']; ?></td>

						<td><img src="<?php echo $row_donhang['image']; ?>" height="100" width="80"></td>
						
						<td><?php echo $row_donhang['booking_date'];?></td>
					
					
					</tr>
					 <?php
					} 
					?> 
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>