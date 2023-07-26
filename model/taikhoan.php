<?php
if (!function_exists('loadall_taikhoan')) {

    function loadall_taikhoan()
    {
        $sql = "SELECT * FROM `tai_khoan` order by `ma_tk` ";
        $khachhang = pdo_query($sql);
        return $khachhang;
    }
}
if (!function_exists('insert_taikhoan')) {

    function insert_taikhoan($name, $email, $pass, $phone, $address)
    {
        $sql = "INSERT INTO `tai_khoan`( `ho_ten`, `email`, `mat_khau`, `sdt`, `dia_chi` ) VALUES ('$name','$email','$pass','$phone','$address')";
        pdo_execute($sql);
    }
}
if (!function_exists('loadone_taikhoan')) {

    function loadone_taikhoan($email, $password)
    {
        $sql = "SELECT * FROM `tai_khoan`where `email`='$email'";
        if ($password != "") {
            $sql .= "and `mat_khau`='$password'";
        }
        $sp = pdo_query_one($sql);
        return $sp;
    }
}
if (!function_exists('update_taikhoan')) {

    function update_taikhoan($ma_tk, $name,$pass, $email, $phone, $address)
    {
        $sql = "UPDATE `tai_khoan` SET `ho_ten`='$name',`email`='$email',`mat_khau`='$pass',`sdt`='$phone',`dia_chi`='$address' WHERE `ma_tk`='$ma_tk'";
        pdo_execute($sql);
    }
}
if (!function_exists('loadone_taikhoan_byID')) {

    function loadone_taikhoan_byID($id)
    {
        $sql = "SELECT * FROM `tai_khoan`where `ma_tk`='$id'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
}
if (!function_exists('delete_taikhoan')) {

    function delete_taikhoan($id)
    {
        $sql = "DELETE FROM `tai_khoan` WHERE `tai_khoan`.`ma_tk` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('check_acount')) {

    function check_acount($email, $pass)
    {
        $sql = "SELECT * FROM  `tai_khoan` WHERE `email`='" . $email . "' AND `mat_khau`='" . $pass . "'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
}
if (!function_exists('check_email')) {
    function check_email($email)
    {
        $sql = "SELECT * FROM `tai_khoan` WHERE `email` = '" . $email . "' ";
        $kh = pdo_query_one($sql);
        return $kh;
    }
}
