<?php
include 'libs/funcs.php';
session_destroy();
setcookie('src', 0,time()-1);
setcookie('name','',time()-1);
setcookie('avt', '',time()-1);
//var_dump($_COOKIE);exit;
chuyentrang('login.php');
?>