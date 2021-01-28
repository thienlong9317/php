<?php 
class controller
{  
    function _404()
    {
        $this->render('view/hethong/404.php');
    }
    //data: array có key tự đặt
    function render($view,$data = [],$layout='layout')
    {
        extract($data);
        include 'view/'.$layout.'.php';
    }
}