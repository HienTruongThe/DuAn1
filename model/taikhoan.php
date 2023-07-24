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

    function insert_taikhoan($ho_ten, $mat_khau, $email, $vai_tro, $sdt)
    {
        $sql = "INSERT INTO `tai_khoan` (`ho_ten`, `mat_khau`, `email`,`vai_tro`,`so_dien_thoai`) VALUES ('$ho_ten', '$mat_khau', '$email', '$vai_tro','$sdt')";
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

    function update_taikhoan($id, $ho_ten, $email, $sdt, $ngaysinh, $diachi)
    {
        $sql = "UPDATE `san_pham` SET `ho_ten` = '$ho_ten', `email` = '$email', `so_dien_thoai` = '$sdt', `ngay_sinh` = '$ngaysinh',`dia_chi` = '$diachi' WHERE `tai_khoan`.`ma_tk` = '$id'";
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
?>