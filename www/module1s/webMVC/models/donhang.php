<?php
class donhang extends PDOConnect
{
    private $tenbang = 'donhang';
    function __construct()
    {
        parent::__construct();
        //$this->tenbang = 'quantri';
        return $this;
    }
    function themDonHang($params)
    {
        $tc = '(ngaydat, sodonhang, makhachhang, tongtien, phiship, trangthaidonhang, trangthai, ngaytao, ngaycapnhat)';
        $nd = '(?, ?, ?, ?, ?, ?, ?, ?, ?)';
        return $this->them($this->tenbang, $tc, $nd, $params);
    }
    function suaDonHang($params)
    {
        $dk = ' ma = ?';
        $nd = ' tongtien = ?, phiship = ?, trangthaidonhang = ?, trangthai = ?, ngaycapnhat=? ';
        return $this->sua($this->tenbang, $nd,  $dk, $params);
    }
    function xoaDonHang($id)
    {
        return $this->xoa($this->tenbang, " ma = ?", [$id]);
    }
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
    function getDonHang($id)
    {
        return $this->getObj($this->tenbang, " ma = ?", [$id]);
    }
}