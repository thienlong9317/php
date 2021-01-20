<?php
class quantricontroller extends maincontroller
{
    private $name = "quantri";
    function index()
    {
        $view = $this->name . "/danhsach.php";
        include 'views/trangchu.php';
    }
    function add()
    {
        $view = $this->name . "/them.php";
        include 'views/trangchu.php';
    }
    function edit()
    {
        $view = $this->name . "/sua.php";
        include 'views/trangchu.php';
    }
    function delete()
    {
        $view = $this->name . "/xoa.php";
        include 'views/trangchu.php';
    }
    function ds()
    {
        $view = $this->name . "/danhsach.php";
        include 'views/trangchu.php';
    }
}