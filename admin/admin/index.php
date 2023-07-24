<?php
include_once '../php/model/pdo.php';
include '../php/model/loai.php';
include '../php/model/sanpham.php';
include '../php/model/taikhoan.php';
include '../php/model/thuvienanh.php';
// include '../php/model/banner.php';
include '../php/model/binhluan.php';
include "header.php";
// include "category/home_dm.php";
if (isset($_GET['btn'])) {
   $btn = $_GET['btn'];
   switch ($btn) {
      case 'home':
         include "home.php";
         break;
         //CATERGORY
      case 'add_dm':
         if (isset($_POST['add_new']) && $_POST['add_new']) {
            $tenloai = $_POST['tenloai'];
            if ($tenloai != "") {
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            } else {
                $error = "Tên loại không được để trống!";
            }
        }
         include "category/add_dm.php";
         break;
      case 'list_dm':
         include "category/list_dm.php";
         break;
      case 'update_dm':
         include "category/update_dm.php";
         break;
         //PRODUCTS
      case 'page_sp':
         include "products/page_sp.php";
         break;
      case 'list_sp':
         include "products/list.sp.php";
         break;
      case 'update_sp':
         include "products/update_sp.php";
         break;
         //USER
      case 'page_kh':
         include "user/list_kh.php";
         break;
         //COMMENT
      case 'page_bl':
         include "comment/list_bl.php";
         break;
         //Statistical
      case 'page_tk':
         include "statistical/statistical.php";
         break;
      case 'chart':
         include "statistical/chart.php";
         break;
         //ORDER
      case 'page_dh':
         include "order/order.php";
         break;
      default:
         include "home.php";
         break;
   }
} else {
   include "home.php";
}
include "footer.php";
