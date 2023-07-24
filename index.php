<?php
include "view/header.php";
if (isset($_GET['btn']) && ($_GET['btn'] != "")) {
    $btn = $_GET['btn'];
    switch ($btn) {
        case 'home':
            include "view/home.php";
            break;
        case 'sign_in':
            include "view/account/sign_in.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>