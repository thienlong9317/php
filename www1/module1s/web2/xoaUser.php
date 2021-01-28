<?php
    include_once ('lib/func.php');
    if(isset($_GET['id']))
    {
        include_once ('lib/PDOConnect.php');
        include_once ('lib/quantri.php');
        $qt = new quantri();
        $qt->xoaQuantri($_GET['id']);
        //xoaUser($_GET['id']);
    }
    chuyentrang("danhsach.php");
?>