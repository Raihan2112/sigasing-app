<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'lokasiread':
      file_exists('pages/admin/lokasiread.php') ? include 'pages/admin/lokasiread.php' : include "pages/404.php";
      break;
    case 'home':
      file_exists('pages/home.php') ? include 'pages/home.php' : include "pages/404.php";
      break;
    default:
      include "pages/404.php";
  }
} else {
    include "pages/home.php";
}