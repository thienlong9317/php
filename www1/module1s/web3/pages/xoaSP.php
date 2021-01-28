<?php
    if(isset($_GET['id']))
    {
        include_once ('libs/quantri.php');
        $qt = new quantri();
        $qt->xoaQuantri($_GET['id']);
        //xoaUser($_GET['id']);
    }
    chuyentrang("?page=dsqt");
?>