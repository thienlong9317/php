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
    function getDetail($id)
    {
        $sql = "SELECT ctdh.ngaytao ngaydat, sp.ten sanpham, ctdh.soluong, ctdh.gia, ctdh.giamgia giagiam, ctdh.trangthai FROM `chitietdonhang` ctdh JOIN sanpham sp on ctdh.masanpham = sp.ma WHERE madonhang = ?";
        return $this->truyvan($sql, [(int)$id], 2);
    }
}