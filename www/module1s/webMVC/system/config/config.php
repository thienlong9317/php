<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
define('TEMPLATE_PATH', 'public/');
//db
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'qlybanhang');
define('PASSWORD', '');
define('USERNAME', 'root');
define('BASEURL', 'http://localhost:81/module1s/webMVC/');