<?php
include_once '../model/pdo.php';
include '../model/loai.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/thuvienanh.php';
// include '../model/banner.php';
include '../model/binhluan.php';
include "header.php";
// include "category/home_dm.php";
if (isset($_GET['btn'])) {
   $btn = $_GET['btn'];
   switch ($btn) {

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
         $list_dm = loadall_danhmuc();
         include "category/list_dm.php";
         break;
      case 'delet_dm':
         if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            delete_danhmuc($_GET['ma_loai']);
         }
         $list_dm = loadall_danhmuc();
         include "category/list_dm.php";
         break;
      case 'edit':
         if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $dm = loadone_danhmuc($_GET['ma_loai']);
         }
         include "category/update_dm.php";
         break;
         
      case 'update':
         if(isset($_POST['update_new']) && ($_POST['update_new'])){
            $ma_loai = $_POST['ma_loai'];
            $name_dm = $_POST['name_dm'];
            update_danhmuc($ma_loai, $name_dm);
            $thong_bao = "Cập nhật thành công";
         }
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
         $list_user = loadall_taikhoan();
         include "user/list_kh.php";
         break;
      case 'delete_user':
         if(isset($_GET['ma_tk']) && ($_GET['ma_tk'])){
            delete_taikhoan($_GET['ma_tk']);
         }
         $list_user = loadall_taikhoan();
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
