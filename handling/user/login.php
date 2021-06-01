<?php 
$error      = "";

//kiểm tra người dùng đã nhấn login chưa
if (isset($_POST['login'])) {
	$email          = $_POST['email'];// lấy dữ liệu email dựa vào name trong input
	$password       = $_POST['password'];// lấy dữ liệu password dựa vào name trong input

	$errEmail       = $validation->is_email($email) ? '' : "- email invalid ";//is_email function check validation email
    $errPassword    = $validation->is_password($password) ? '' : "- password invalid ";//is_password function check 

    //nối hết lỗi chung về  $error để show lên alert
    $error = "Login Faild: " . $errEmail . $errPassword;

    //check not null error + alert
    if ($errPassword != '' || $errEmail != '') {
        echo "<script language='javascript'>";
        echo "alert('" . $error . "');";
        echo "</script>";
        return;
    }

     //query SELECT +  MD5 mã hóa password
    $sql     = "SELECT * FROM `user` WHERE email = '$email' AND password = MD5('".$password."')";
    $data=mysqli_query($conn,$sql); // thực thi truy vấn
	$kiemtradulieu=mysqli_num_rows($data);

    if($kiemtradulieu > 0){
    	$row=mysqli_fetch_assoc($data); //đọc dữ liệu
    	//lưu data sesion
		$_SESSION["iduser"]=$row['id'];
		$_SESSION["username"]=$row['email'];
		$_SESSION["	password"]= $password;
    	//show alert
        echo "<script language='javascript'>";
        echo "alert('Register successfuly ');";
        echo "window.location='index.php';";
        echo "</script>";
        return;
    }
     //show alert
        echo "<script language='javascript'>";
        echo "alert('Login faild please check acount')";
        echo "</script>";
}
 ?>