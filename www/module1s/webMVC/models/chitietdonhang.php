<?php
class chitietdonhang extends PDOConnect
{
    private $tenbang = 'chitietdonhang';
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themCTDH($params)
    {
        $tc = '(madonhang, masanpham, soluong, gia, giamgia, trangthai, ngaytao, ngaycapnhat)';
        $nd = '(?, ?, ?, ?, ?, ?, ?, ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaCTDH($params)
    {
        $dk = ' ma = ?';
        $nd = ' masanpham = ?, soluong = ?, gia = ?, giamgia = ?, trangthai=?, ngaycapnhat =? ';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaCTDH($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function getCTDH($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}