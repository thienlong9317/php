<?php 
if(!isset($_GET['id']))
    chuyentrang('index.php?page=dsqt');
include 'core/quantri.php';
$obj = new quantri();
$user = $obj->item($_GET['id']);
if(!$user)
    chuyentrang('index.php?page=dsqt');
$obj->xoa($user->ma);
$obj->disconnect();
chuyentrang('index.php?page=dsqt');
?>
