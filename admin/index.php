<?php
include "header.php";
include "home.php";
if (isset($_GET['btn'])) {
   $btn = $_GET['btn'];
   switch ($btn) {
      case 'home':
         include "home.php";
         break;
      case 'page_dm':
         include "category/home_dm.php";
         break;
      case 'page_sp':
         break;
      case 'page_kh':
         break;
      case 'page_bl':
         break;
      case 'page_tk':
         break;
      default:
         include "home.html";
         break;
   }
} else {
   include "home.php";
}
include "footer.php";

?>