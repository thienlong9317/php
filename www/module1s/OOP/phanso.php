<?php
class phanso
{
    var $a;
    var $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    function cong(phanso $ps2)
    {
        $tu = $this->a*$ps2->b + $this->b*$ps2->a;
        $mau = $this->b*$ps2->b;
        return new phanso($tu, $mau);
        //$this->xemkq($ps2, $tu, $mau, " + ");
        
        //return $tu."/".$mau;
    }
    function tru(phanso $ps2)
    {
        $tu = $this->a*$ps2->b - $this->b*$ps2->a;
        $mau = $this->b*$ps2->b;
        return new phanso($tu, $mau);
        //$this->xemkq($ps2, $tu, $mau, " - ");
        //return $tu."/".$mau;
        //echo "ket qua ".$this->xem()." - ".$ps2->xem().' = '.$ps3->xem().'<br>';
    }
    function nhan(phanso $ps2)
    {
        $tu = $this->a*$ps2->a;
        $mau = $this->b*$ps2->b;
        return new phanso($tu, $mau);
        //$this->xemkq($ps2, $tu, $mau, " * ");
        //return $tu."/".$mau;
        //echo "ket qua ".$this->xem()." * ".$ps2->xem().' = '.$ps3->xem().'<br>';
    }
    function chia(phanso $ps2)
    {
        $tu = $this->a*$ps2->b;
        $mau = $this->b*$ps2->a;
        return new phanso($tu, $mau);
        //$this->xemkq($ps2, $tu, $mau, " : ");
        //return $tu."/".$mau;
        //echo "ket qua ".$this->xem()." : ".$ps2->xem().' = '.$ps3->xem().'<br>';
    }
    function xem()
    {
        return $this->a."/".$this->b;
    }
    function xemkq(phanso $ps2, $tu, $mau, $pheptinh)
    {
        $ps3 =  new phanso($tu, $mau);
        echo "ket qua ".$this->xem().$pheptinh.$ps2->xem().' = '.$ps3->xem().'<br>';
    }
}