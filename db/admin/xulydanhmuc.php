<?php
	include '../connect.php'
?>
<?php
	if(isset($_POST['themdanhmuc'])){
		$tendanhmuc = $_POST['danhmuc'];
		$sql_insert = mysqli_query($con,"INSERT INTO category(name) values ('$tendanhmuc')");
	}elseif(isset($_POST['capnhatdanhmuc'])){
		$id_post = $_POST['id_danhmuc'];
		$tendanhmuc = $_POST['danhmuc'];
		$sql_update = mysqli_query($con,"UPDATE category SET name='$tendanhmuc' WHERE id_category='$id_post'");
		header('Location:xulydanhmuc.php');
	}
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($con,"DELETE FROM category WHERE id_category='$id'");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh mục</title>
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
				$id_capnhat = $_GET['id'];
				$sql_capnhat = mysqli_query($con,"SELECT * FROM category WHERE id_category='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				?>
				<div class="col-md-4">
				<h4>Cập nhật danh mục</h4>
				<label>Tên danh mục</label>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['name'] ?>"><br>
					<input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['id_category'] ?>">

					<input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-default">
				</form>
				</div>
			<?php
			}else{
				?>
				<div class="col-md-4">
				<h4>Add Category</h4>
				<label>Name Category</label>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" placeholder="Name Category"><br>
					<input type="submit" name="themdanhmuc" value="Add Category" class="btn btn-default">
				</form>
				</div>
				<?php
			} 
			
				?>
			<div class="col-md-8">
				<h4>List Category</h4>
				<?php
				$sql_select = mysqli_query($con,"SELECT * FROM category ORDER BY id_category DESC"); 
				?>
				<table class="table table-bordered ">
					<tr>
						<th>Numerical</th>
						<th>Name</th>
						<th>Manager</th>
					</tr>
					<?php
					$i = 0;
					while($row_category = mysqli_fetch_array($sql_select)){ 
						$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_category['name'] ?></td>
						<td><a href="?xoa=<?php echo $row_category['id_category'] ?>">Delete</a> || <a href="?quanly=capnhat&id=<?php echo $row_category['id_category'] ?>">Update</a></td>
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