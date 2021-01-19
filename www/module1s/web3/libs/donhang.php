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
            $tc = '(ten, mota, icon, macha, tieude, tukhoa, motatimkiem, hinhchiase, tenrutgon, trangthai, ngaytao, ngaycapnhat)';
            $nd = '(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            return $this->them($this->tenbang, $tc, $nd, $params);
        }
        function suaDonHang( $params)
        {
            $dk = ' ma = ?';
            $nd = ' ten = ?, mota= ?, icon= ?, macha= ?, tieude= ?, tukhoa= ?, motatimkiem= ?, hinhchiase= ?, tenrutgon= ?, trangthai = ?, ngaytao = ?, ngaycapnhat = ? ';
            return $this->sua($this->tenbang, $nd, $params, $dk );
        }
        function xoaDonHang($id)
        {
            return $this->xoa($this->tenbang, " ma = ?", [$id]);
        }
        function getDanhsach()
        {
            return $this->getDS($this->tenbang);
        }
        function getDanhsachCha()
        {
            return $this->truyvan("select * from loaisanpham where macha = null", [], 2);
        }
        function getdonhangchitiet($id)
        {
            return $this->getObj($this->tenbang," ma = ?", [$id]);
        }
    }
?>