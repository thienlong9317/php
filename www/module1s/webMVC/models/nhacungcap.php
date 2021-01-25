<?php
class NhaCungCap extends PDOConnect
{
    private $tenbang = 'nhacungcap';
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themNCC($params)
    {
        $tc = '(ten, trangthai, ngaytao, ngaycapnhat)';
        $nd = '(?, ?, ?, ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaNCC($params)
    {
        $dk = ' ma = ?';
        $nd = ' ten = ?, trangthai = ?, ngaycapnhat=? ';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaNCC($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function getNCC($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}