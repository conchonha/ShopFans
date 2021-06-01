<?php
include './handling/utils/validation.php';
include './handling/utils/connect.php';
//lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include.

$validation = new validation(); // tạo 1 đối tượng $validation để sử dụng các function check validation
$error      = "";

//$_POST lấy dữ liệu dưới dạng method post được gửi từ form my-account.php
//isset kiểm tra có tồn tại ko
if (isset($_POST['register'])) {
    $name           = $_POST['name']; // lấy dữ liệu name dựa vào name trong input
    $email          = $_POST['email'];// lấy dữ liệu email dựa vào name trong input
    $password       = $_POST['password'];// lấy dữ liệu password dựa vào name trong input
    $cofirmPassword = $_POST['confirm_password'];// lấy dữ liệu confirm_password dựa vào name trong input
    $checkbox       = isset($_POST['vehicle1']) ? $_POST['vehicle1'] : '';// lấy dữ liệu checkbox dựa vào name trong input
    
    $errName        = $validation->is_name($name) ? '' : 'name invalid'; //is_name function check validation name
    $errEmail       = $validation->is_email($email) ? '' : "- email invalid ";//is_email function check validation email
    $errPassword    = $validation->is_password($password) ? '' : "- password invalid ";//is_password function check validation is_password
    $errConfirmPass = $validation->is_confirmPassword($password, $cofirmPassword) ? "- confirm_password invalid " : '';
    $errorCheckbox  = ($checkbox != 'Bike') ? "- Please check agree with all term" : '';
    
    //nối hết lỗi chung về  $error để show lên alert
    $error = "Register Faild: " . $errName . $errPassword . $errConfirmPass . $errorCheckbox;
    //check not null error + alert
    if ($errName != '' || $errPassword != '' || $errConfirmPass != '' || $errorCheckbox != '') {
        echo "<script language='javascript'>";
        echo "alert('" . $error . "');";
        echo "</script>";
        return;
    }
    
    //query SELECT +  MD5 mã hóa password
    $sql     = "SELECT COUNT(*) FROM `user` WHERE email = '$email' AND password = MD5('".$password."')";
    $query    = mysqli_query($conn, $sql); // thực thi truy vấn
    $data = mysqli_fetch_assoc($query); //đọc dữ liệu
    if ($data["COUNT(*)"] > 0) { // check mail đã tồn tại
        //show alert
        echo "<script language='javascript'>";
        echo "alert('Email already exists')";
        echo "</script>";
        return;
    }
    //query mysql INSERT +  MD5 mã hóa password
    $sql  = "INSERT INTO `user`( `name`, `email`, `password`) VALUES ('$name','$email',MD5('".$password."'))";
    $data = mysqli_query($conn, $sql); // thực thi query
    
    if ($data) { // check data + show alert
        echo "<script language='javascript'>";
        echo "alert('Register successfuly ');";
        echo "window.location='index.php';";
        echo "</script>";
        return;
    }
    
    //show alert faild
    echo "<script language='javascript'>";
    echo "alert('Register faild ');";
    echo "</script>";
}
?>