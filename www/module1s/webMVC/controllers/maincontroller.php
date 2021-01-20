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
}