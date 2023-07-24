<?php
include_once '../model/pdo.php';
include '../model/loai.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/thuvienanh.php';
// include '../model/banner.php';
include '../model/binhluan.php';
include 'header.php';
session_start();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "listdm":
            $danhmuc = loadall_danhmuc();
            include 'loai/list.php';
            break;
        case "adddm":
            if (isset($_POST['submit']) && $_POST['submit']) {
                $tenloai = $_POST['tenloai'];
                if ($tenloai != "") {
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                } else {
                    $error = "Tên loại không được để trống!";
                }
            }
            include "loai/add.php";
            break;
        case "xoadm":
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                delete_danhmuc($id);
                $thongbao = "Xoa thanh cong";
                $danhmuc = loadall_danhmuc();
                include 'loai/list.php';
            }
            break;
        case "suadm":
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $dmedit = loadone_danhmuc($id);
            }
            include 'loai/edit.php';
            break;
        case "updatedm":
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_GET['id'];
                $tenloai = $_POST['tenloai'];
                if ($tenloai != "") {
                    update_danhmuc($id, $tenloai);
                    $thongbao = "sua thanh cong";
                    $danhmuc = loadall_danhmuc();
                    include 'loai/list.php';
                } else {
                    $error['loai'] = "Khong duoc de trong";
                    $dmedit = loadone_danhmuc($id);
                    include 'loai/edit.php';
                }
            }
            break;
        case "listsp":
            include "../admin/sanpham/list.php";
            break;
        case "listtk":
            include "../admin/taikhoan/list.php";
            break;
        case "listbl":
            include "../admin/binhluan/list.php";
            break;
        case "thongke":
            include "../admin/thongke/list.php";
            break;
        default:
            include "../admin/index.php";
            break;
    }

}
?>