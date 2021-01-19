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
        function themSP($params)
        {
            $tc = '(ten, gia, mota, hinhdaidien, video, manhacungcap, maloai, hinhchitiet, motachitiet, mavach, tieude, tukhoa, motatimkiem, hinhchiase, tenrutgon, trangthai, ngaytao, ngaycapnhat, soluong)';
            $nd = '(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            return $this->them($this->tenbang, $tc, $nd, $params);
        }
        function suaSP( $params)
        {
            $dk = ' ma = ?';
            $nd = ' ten = ?, ten, gia = ?, mota= ?, hinhdaidien= ?, video= ?, manhacungcap= ?, maloai= ?, hinhchitiet= ?, motachitiet= ?, mavach= ?, tieude= ?, tukhoa= ?, motatimkiem= ?, hinhchiase= ?, tenrutgon= ?, trangthai= ?, ngaytao= ?, ngaycapnhat= ?, soluong= ? ';
            return $this->sua($this->tenbang, $nd, $params, $dk );
        }
        function xoaSP($id)
        {
            return $this->xoa($this->tenbang, " ma = ?", [$id]);
        }
        function getDanhsach()
        {
            return $this->getDS($this->tenbang);
        }
        function getSP($id)
        {
            return $this->getObj($this->tenbang," ma = ?", [$id]);
        }
    }
?>