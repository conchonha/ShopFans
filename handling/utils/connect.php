<?php
//kết nối tới cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "fan_shop");
mysqli_set_charset($conn, "UTF8");

//kiểm tra nếu kết nối lỗi
if (mysqli_connect_errno()) {
	//show alert thống báo lỗi connect
    echo "<script language='javascript'>";
    echo "alert('Failed to connect to MySQL: " . mysqli_connect_error() . "');";
    echo "</script>";
    exit();
}

?>