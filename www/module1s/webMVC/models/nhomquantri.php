<?php
class nhomquantri extends PDOConnect
{
    private $tenbang = 'nhomquantri';
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
    function themNhomQT($params)
    {
        $tc = '(ten, mota, trangthai, ngaytao, ngaycapnhat )';
        $nd = '(?, ?, ?, ?, ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaNhomQT($params)
    {
        $dk = ' ma = ?';
        $nd = ' ten = ?, mota = ?, trangthai = ?, ngaycapnhat=?';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaNhomQT($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }

    function getNhomQT($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}