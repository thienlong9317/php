<?php
class donhangcontroller extends maincontroller
{
    var $link = 'views/donhang/';
    function index()
    {
        $view = $this->link . 'danhsach.php';
        $this->render($view);
    }
    function add()
    {
        // $view = 'views/loaisp/them.php';
        // $this->render($view);
    }
    function edit()
    {
        $view = $this->link . 'sua.php';
        $this->render($view);
    }
    function delete()
    {
        //include 'views/sanpham/xoasanpham.php';
    }
}