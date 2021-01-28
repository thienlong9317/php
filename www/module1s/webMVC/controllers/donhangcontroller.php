<?php
class donhangcontroller extends maincontroller
{
    var $link = 'views/donhang/';
    function index()
    {
        include_once('models/donhang.php');
        $qt =  new donhang();
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