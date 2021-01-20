<?php
class hethongcontroller extends maincontroller
{
    function index()
    {
        include 'views/trangchu.php';
    }
    function contact()
    {
        include 'views/lienhe.php';
    }
    function _404()
    {
        include 'views/404.php';
    }
}