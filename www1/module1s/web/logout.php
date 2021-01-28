<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_destroy();
$cookie_name = "user";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time()-1000, "/");
//set the nao thi xoa cung phai nhu the ay -- set có dấu "/" thì xóa cũng phải có "/"

// unset cookies
// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }

// }
header('location: login.php');
exit;
?>