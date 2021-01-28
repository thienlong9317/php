<?php
class hethongcontroller extends maincontroller
{
    function index()
    {
        //include 'views/trangchu.php';
        $a = 123;
        $this->render(null, ['a' => $a]);
    }
    function contact()
    {
        //include 'views/lienhe.php';
        $this->render('views/lienhe.php');
    }
    function _404()
    {
        include 'views/404.php';
    }
}