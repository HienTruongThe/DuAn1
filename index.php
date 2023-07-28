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
                $email = $_POST['email'];
                $name = $_POST['name_tk'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass_word'];
                $address = $_POST['address'];

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $errors = [];
                    if (empty(trim($email))) {
                        $errors['email'] = "Không được để trống ⚠";
                    } else {
                        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                            $errors['email'] = "Email không hợp lệ ⚠";
                        }
                    }

                    if (empty(trim($name))) {
                        $errors['name_tk'] = "Không được để trống ⚠";
                    }
                    if (empty($phone)) {
                        $errors['phone'] = "Không được để trống ⚠";
                    } else {
                        if (!preg_match('/^[0-9]{10}+$/', $phone)) {
                            $errors['phone'] = "Số điện thoại không đúng";
                        }
                    }
                    if (empty($pass)) {
                        $errors['pass_word'] = "Không được để trống ⚠ ";
                    }

                    if (empty($address)) {
                        $errors['address'] = "Không được để trống ⚠ ";
                    }
                }
                if (empty($errors)) {
                    insert_taikhoan($name, $email, $pass, $phone, $address);
                    $thong_bao = "Bạn Đã Đăng Ký Thành Công 😆😆😆";
                }
            }
            include "view/account/sign_up.php";
            break;
        case 'sign_in':
            if (isset($_POST['signin']) && ($_POST['signin'])) {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $errors = [];
                    if (empty(trim($email))) {
                        $errors['email'] = "Không được để trống ⚠";
                    } else {
                        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                            $errors['email'] = "Email không hợp lệ ⚠";
                        }
                    }
                    if (empty($pass)) {
                        $errors['pass_word'] = "Không được để trống ⚠ ";
                    }
                }
                $check_acount = check_acount($email, $pass);
                if (empty($errors)) {
                    if (is_array($check_acount)) {
                        $_SESSION['user'] = $check_acount;
                        header('Location:index.php');
                    } else {
                        $thong_bao = "Tài khoản không tồn tại !!!";
                    }
                }
            }
            include "view/account/sign_in.php";
            break;
        case 'forgot_password':
            if (isset($_POST['send']) && ($_POST['send'])) {
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thong_bao = "Mật Khẩu của bạn là : " . $check_email['mat_khau'];
                } else {
                    $thong_bao = "Email này không tồn tại";
                }
            }
            include "view/account/fogot.php";
            break;
        case 'edit_acount':
            if (isset($_POST['update_tk']) && ($_POST['update_tk'])) {
                $email = $_POST['email'];
                $name = $_POST['name_tk'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass_word'];
                $address = $_POST['address'];
                $ma_tk = $_POST['ma_tk'];
                update_taikhoan($ma_tk, $name, $pass, $email, $phone, $address);
                $_SESSION['user'] = check_acount($email, $pass);
                header("Location: index.php?btn=edit_acount");
            }

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
        case 'details':
            include "view/product/product_details.php";
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
