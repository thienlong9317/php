<?php
class loaisanphamcontroller extends maincontroller
{
    var $link = 'views/loaisanpham/';
    function index()
    {
        include_once('models/loaisanpham.php');
        $qt =  new loaisanpham();
        $data = $qt->getDanhsach();
        $view = $this->link . 'danhsach.php';
        $this->render($view, ['data' => $data]);
    }
    function form()
    {
        if (isset($_GET['page']) && $_GET['page'] == 'edit') {
            $this->edit();
        } else {
            $this->add();
        }
    }
    function add()
    {
        $view = $this->link . 'them.php';
        $this->render($view);
    }
    function edit()
    {
        $lsp =
            $view = $this->link . 'sua.php';
        $this->render($view);
    }
    function delete()
    {
        //include 'views/sanpham/xoasanpham.php';
    }
}