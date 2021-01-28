<?php
class pheptinh
{
    var $a;
    var $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    function cong()
    {
        return $this->a+$this->b;
    }
    function tru()
    {
        return $this->a-$this->b;
    }
    function nhan()
    {
        return $this->a*$this->b;
    }
    function chia()
    {
        return $this->a/$this->b;
    }
    function xem()
    {
        echo 'so a: '.$this->a." so b: ".$this->b;
    }
}