<?php
class pheptinh
{
    var $soa,$sob;
    function __construct($soa,$sob)
    {
        $this->soa = $soa;
        $this->sob = $sob;
    }
    function cong()
    {
        return $this->soa+$this->sob;
    }

    function tru()
    {
        return $this->soa-$this->sob;
    }

    function nhan()
    {
        return $this->soa*$this->sob;
    }

    function chia()
    {
        return $this->soa/$this->sob;
    }
    function xem()
    {
        echo $this->soa.'<br>'.$this->sob;
    }
}
