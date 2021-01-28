<?php
class phanquyen extends PDOConnect
{
    private $tenbang = 'phanquyen';
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themPQ($params)
    {
        $tc = '(machucnang, maquantri )';
        $nd = '(?, ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaPQ($params)
    {
        $dk = ' machucnang = ?';
        $nd = ' maquantri = ?';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaPQ($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }

    function getNhomQT($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}