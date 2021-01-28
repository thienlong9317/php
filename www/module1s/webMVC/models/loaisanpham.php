<?php
class loaisanpham extends PDOConnect
{
    private $tenbang = 'loaisanpham';
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themLSP($params)
    {
        $tc = '(ten, mota, icon, macha, tieude, tukhoa, motatimkiem, hinhchiase, tenrutgon, trangthai, ngaytao, ngaycapnhat)';
        $nd = '(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaLSP($params)
    {
        $dk = ' ma = ?';
        $nd = ' ten = ?, mota =?, icon = ?, macha = ?, tieude =?,  tukhoa = ?, motatimkiem=?, hinhchiase=?, tenrutgon=?, trangthai = ?, ngaycapnhat=? ';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaLSP($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function getLSP($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}