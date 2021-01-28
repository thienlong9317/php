<?php
class maincontroller
{
    function _404()
    {
        include 'views/404.php';
    }
    function toLogin()
    {
        if (isset($_COOKIE["user"])) {
            include_once('models/quantri.php');
            $qt = new quantri();
            $mang = explode("|", $_COOKIE['user']);
            if ($qt->login($mang[0], $mang[1])) {
                chuyentrang('./');
            }
        }
        if (isset($_POST['username'], $_POST['password']) && $_POST['username'] && $_POST['password']) {
            if (isset($_POST['rm']) && $_POST['rm']) {
                $kq = login($_POST['username'], $_POST['password'], $_POST['rm']);
            } else
                $kq = login($_POST['username'], $_POST['password']);
            if ($kq === true) {
                chuyentrang('./');
            }
        }
        include 'views/login.php';
    }
    function logOut()
    {
        include 'views/logout.php';
    }

    function render($view, $data = [], $layout = 'trangchu')
    {
        extract($data); //giai nen mang ra thanh cac bien de su dung tuong minh
        include 'views/' . $layout . '.php';
    }
}