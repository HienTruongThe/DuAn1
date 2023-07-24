<?php
include "pdo.php";
if (!function_exists('loadAll_sanpham')) {

    function loadAll_sanpham()
    {
        $sql = "SELECT * FROM `san_pham` order by `ma_sp` desc";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('insert_sanpham')) {

    function insert_sanpham($tensp, $dongia, $giamgia, $hinh, $ngaynhap, $loai, $size, $mau, $mota)
    {
        $sql = "INSERT INTO `san_pham` (`ten_sp`, `gia_sp`, `giam_gia`, `hinh_sp`, `ma_loai`, `ngay_nhap`, `size`,`mau_sac`, `mo_ta`) VALUES ('$tensp', '$dongia', '$giamgia', '$hinh', '$loai', '$ngaynhap','$size','$mau', '$mota')";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_sanpham')) {

    function delete_sanpham($id)
    {
        $sql = "DELETE FROM `san_pham` WHERE `san_pham`.`ma_sp` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('update_sanpham')) {

    function update_sanpham($id, $tensp, $dongia, $giamgia, $hinh, $loai, $size, $mau, $mota)
    {
        $sql = "UPDATE `san_pham` SET `ten_sp` = '$tensp', `gia_sp` = '$dongia', `giam_gia` = '$giamgia',`ma_loai` = $loai, `hinh_sp` = '$hinh', `size` = '$size',`mau_sac` = '$mau', `mo_ta` = '$mota' WHERE `san_pham`.`ma_sp` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('loadOne_sanpham')) {

    function loadOne_sanpham($id)
    {
        $sql = "SELECT * FROM `san_pham` order by `ma_sp` where `ma_sp` = '$id'";
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
}
if (!function_exists('loadSize_sanpham')) {

    function loadSize_sanpham($id)
    {
        $sql = "SELECT `size` FROM `san_pham` order by `ma_sp` where `ma_sp` = '$id'";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAnh_sanpham')) {

    function loadAnh_sanpham($id)
    {
        $sql = "SELECT `thu_vien`.`anh` FROM `san_pham` 
    join `thu_vien` on `thu_vien`.`ma_sp` =  `san_pham`.`ma_sp`
    order by `ma_sp` where `ma_sp` = '$id''";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
?>