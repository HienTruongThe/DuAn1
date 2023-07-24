<?php
if (!function_exists('thongke_binhluan')) {

    function thongke_binhluan()
    {
        $sql = "SELECT 
            `san_pham`.`ma_sp`, `san_pham`.`ten_sp`,
            count(*) so_luong,
            min(`binh_luan`.`ngay_bl`) cu_nhat,
            max(`binh_luan`.`ngay_bl`) moi_nhat
            from binh_luan
            join san_pham on `san_pham`.`ma_sp` = `binh_luan`.`ma_sp`
            group by `san_pham`.`ma_sp`, `san_pham`.`ten_sp`
            having `so_luong` > 0
            ";
        $tk_bl = pdo_query($sql);
        return $tk_bl;
    }
}
if (!function_exists('loadall_binhluan')) {

    function loadall_binhluan($idsp)
    {
        $sql = "SELECT * FROM `binh_luan`";
        if ($idsp != 0) {
            $sql .= " where `ma_sp`='$idsp' order by `ma_bl` ";
        }
        $binhluan = pdo_query($sql);
        return $binhluan;
    }
}
if (!function_exists('insert_binhluan')) {

    function insert_binhluan($noidung, $idsp, $idkh, $date)
    {
        $sql = "INSERT INTO `binh_luan` (`noi_dung`, `ma_kh`, `ma_hh`, `ngay_bl`) VALUES ('$noidung', '$idkh', '$idsp', '$date')";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_binhluan')) {

    function delete_binhluan($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `binh_luan`.`ma_bl` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_binhluan_bySP')) {

    function delete_binhluan_bySP($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `binh_luan`.`ma_hh` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_binhluan_byKH')) {
    function delete_binhluan_byKH($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `binh_luan`.`ma_kh` = '$id'";
        pdo_execute($sql);
    }
}