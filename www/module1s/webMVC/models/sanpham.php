<?php
class sanpham extends PDOConnect
{
    private $tenbang = 'sanpham';
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themSanPham($params)
    {
        $tc = '(ten, gia, mota, hinhdaidien, video, manhacungcap, maloai, hinhchitiet, motachitiet, mavach, tieude, tukhoa, motatimkiem, hinhchiase, tenrutgon, trangthai, ngaytao, ngaycapnhat, soluong)';
        $nd = '(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaSanPham($params)
    {
        $dk = ' ma = ?';
        $nd = ' ten = ?, gia =? , mota =?, hinhdaidien=?, video=?, manhacungcap=?, maloai=?, hinhchitiet=?, motachitiet=?, mavach=?, tieude=?, tukhoa=?, motatimkiem=?, hinhchiase=?, tenrutgon=?, trangthai=?, ngaycapnhat=?, soluong=? ';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaSanPham($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function getSanPham($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}