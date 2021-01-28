<?php
class maincontroller
{
    function _404()
    {
        include 'views/404.php';
    }
    function toLogin()
    {
        include 'views/login.php';
    }
    function logOut()
    {
        include 'views/logout.php';
    }
    function render($view, $data = [])
    {
        extract($data); //giai nen mang ra thanh cac bien de su dung tuong minh
        include 'views/trangchu.php';
    }
}