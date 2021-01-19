<?php
    class donhangchitiet extends PDOConnect
    {
        private $tenbang = 'donhangchitiet';
        function __construct()
        {
            parent::__construct();
            //$this->tenbang = 'quantri';
            return $this;
        }
        function themDonHangChiTiet($params)
        {
            $tc = '(madonhang, masanpham, soluong, gia, giamgia, trangthai, ngaytao, ngaycapnhat)';
            $nd = '(?, ?, ?, ?, ?, ?, ?, ?, ?)';
            return $this->them($this->tenbang, $tc, $nd, $params);
        }
        function suaDHCT( $params)
        {
            $dk = ' ma = ?';
            $nd = ' ten = ?, mota= ?, icon= ?, macha= ?, tieude= ?, tukhoa= ?, motatimkiem= ?, hinhchiase= ?, tenrutgon= ?, trangthai = ?, ngaytao = ?, ngaycapnhat = ? ';
            return $this->sua($this->tenbang, $nd, $params, $dk );
        }
        function xoaDHCT($id)
        {
            return $this->xoa($this->tenbang, " ma = ?", [$id]);
        }
        function getDanhsach()
        {
            return $this->getDS($this->tenbang);
        }
        // function getDanhsachCha()
        // {
        //     return $this->truyvan("select * from loaisanpham where macha = null", [], 2);
        // }
        // function getQuantri($id)
        // {
        //     return $this->getObj($this->tenbang," ma = ?", [$id]);
        // }
    }
?>