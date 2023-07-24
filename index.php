<?php
session_start();
include "model/pdo.php";
include "model/loai.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/thongke.php";
include "model/binhluan.php";
include "model/thuvienanh.php";
include "view/header.php";

if (isset($_GET['btn']) && ($_GET['btn'] != "")) {
    $btn = $_GET['btn'];
    switch ($btn) {
        case 'home':
            include "view/home.php";
            break;
            //Acount
        case 'sign_up':
            if (isset($_POST['add_tk']) && ($_POST['add_tk'])) {
                $ho_ten = $_POST['name_tk'];
                $mat_khau = $_POST['pass_word'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $dia_chi = $_POST['address'];
                insert_taikhoan($ho_ten, $mat_khau, $email, $sdt, $dia_chi);
                $thong_bao = "Chúc mừng bạn đăng ký thành công &#9996";
            }
            include "view/account/sign_up.php";
            break;
        case 'sign_in':
            if (isset($_POST['signin']) && ($_POST['signin'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $check = loadone_taikhoan($email, $password);
                if (is_array($check)) {
                    $_SESSION['user'] = $check;
                    header('Location:index.php');
                } else {
                    $thong_bao = "Tài khoản không tồn tại";
                }
            }
            include "view/account/sign_in.php";
            break;
        case 'forgot_password':

            include "view/account/fogot.php";
            break;
        case 'edit_acount':

            include "view/account/update_tk.php";
            break;
        case 'exit':
            session_unset();
            header('Location:index.php');
            //product
        case 'product':
            include "view/product/product.php";
            break;
            //Giỏ hàng
        case 'shopping':
            include  "view/order/shopping.php";
            break;
        case 'oder':
            include "view/order/oder.php";
            break;
        case 'success':
            include "view/order/order_success.php";
            break;
            //CONTACT            
        case 'contact':
            include "view/contact/contact.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
