<?php
class quantricontroller extends maincontroller
{
    private $name = "views/quantri/";
    function index()
    {
        $view = $this->name . "/danhsach.php";
        $this->render($view);
        //include 'views/trangchu.php';
    }
    function add()
    {
        $view = $this->name . "/them.php";
        $this->render($view);
    }
    function edit()
    {
        $view = $this->name . "/sua.php";
        $this->render($view);
    }
    function delete()
    {
        include 'models/quantri.php';
        $qt = new quantri();
        $qt->xoaQuantri($_GET["id"]);
        $view = $this->name . "/danhsach.php";
        $this->render($view);
    }
    function ds()
    {
        $view = $this->name . "/danhsach.php";
        $this->render($view);
    }
}