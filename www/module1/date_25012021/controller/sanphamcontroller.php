<?php 
class sanphamcontroller
{
    function index()
    {
        include 'view/sanpham/danhsach.php';
    }
    function detail()
    {
        include 'view/sanpham/chitiet.php';
    }
    function _404()
    {
        include 'view/hethong/404.php';
    }
}