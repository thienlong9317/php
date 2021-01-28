<?php 
class hethongcontroller extends controller
{
    function index()
    {     
        $a = 123;       
        $b = 43534;
        $this->render('view/hethong/index.php',['a'=>$a,'b'=>$b]);
    }
    function contact()
    {
        $this->render('view/hethong/lienhe.php');
    }
  
}