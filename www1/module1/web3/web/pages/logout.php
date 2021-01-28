<?php
session_destroy();
setcookie('src', 0,time()-1);
setcookie('name','',time()-1);
setcookie('avt', '',time()-1);
chuyentrang('login.php');
?>