<?php
class KhachHang extends PDOConnect
{
    private $tenbang = 'khachhang';
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themKH($params)
    {
        $tc = '(ten)';
        $nd = '(?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaKH($params)
    {
        $dk = ' ma = ?';
        $nd = ' ten = ?';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaKH($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function getKH($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}