<?php
class sanphamcontroller extends maincontroller
{
    function index()
    {
        include 'views/sanpham/danhsach.php';
    }
    function add()
    {
        include 'views/sanpham/themsanpham.php';
    }
    function edit()
    {
        include 'views/sanpham/suasanpham.php';
    }
    function delete()
    {
        //include 'views/sanpham/xoasanpham.php';
    }
}