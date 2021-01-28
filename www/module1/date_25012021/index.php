<?php 
$action  =  $_GET['action']??'index';
$controllername  =  ($_GET['controller']??'hethong').'controller';
$path = 'controller/'.$controllername.'.php';
include 'system/config/config.php';
include 'system/libs/funcs.php';
include 'controller/controller.php';
include 'system/db/database.php';
if(file_exists($path))
{
    include $path;
    $controller = new $controllername();
    if(method_exists($controller,$action))
    {
        //c: nguoidung
        //a: create
        if(islogin())
        {
            $controller->$action();
        }else{
           include_once 'controller/nguoidungcontroller.php';
           $controller = new nguoidungcontroller();
           $controller->login();
        }
    }else{
        $controller->_404();
    }
}else{
    $controller = new controller();
    $controller->_404();
}