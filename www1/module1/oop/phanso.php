<?php
class phanso
{
    var $tu,$mau;
    function __construct($tu,$mau)
    {
        $this->tu = $tu;
        $this->mau = $mau;
    }    
    function cong(phanso $phanso)//$phanso : phanso hoan chinh
    {
        $tumoi = $this->tu*$phanso->mau + $this->mau*$phanso->tu;
        $maumoi = $phanso->mau * $this->mau;
        //return new phanso($tumoi,$maumoi);
        $kq  = new phanso($tumoi,$maumoi);
        return $kq;
    }
    function xem()
    {
        echo $this->tu.'/'.$this->mau;
        return $this;
    }
}
