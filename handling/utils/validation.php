<?php
class validation
{
    function is_email($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    
    //kiểm tra password có đúng định dạng "FALSE" -> sai TRUE -> đúng'
    function is_password($str)
    {
        $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $subject = "Cuongsb$";
        
        return (!preg_match($partten, $str)) ? FALSE : TRUE;
    }
    
    //kiểm tra phone có đúng định dạng "FALSE" -> sai TRUE -> đúng'
    function is_phone($str)
    {
        $pattern = '#^?[\d]3?-?[\d]2?-[\d]{2}\.[\d]{3}-[\d]{3}$#';
        return preg_match($pattern, $str, $match);
    }
    
    //kiểm tra is_confirmPassword có đúng định dạng "FALSE" -> sai TRUE -> đúng'
    function is_confirmPassword($str1, $str2)
    {
        if ($str1 != $str2) {
            return TRUE;
        }
        return FALSE;
    }
    
    //kiểm tra is_name có đúng định dạng "FALSE" -> sai TRUE -> đúng'
    function is_name($str)
    {
        $partten = "/^([a-zA-Z' ]+)$/";
        return (!preg_match($partten, $str)) ? FALSE : TRUE;
    }
}

?>
