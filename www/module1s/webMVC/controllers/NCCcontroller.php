<?php
class NCCcontroller extends maincontroller
{
    var $link = 'views/NCC/';
    function index()
    {
        $view = $this->link . 'danhsach.php';
        $this->render($view);
    }
    function add()
    {
        $view = $this->link . 'them.php';
        $this->render($view);
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