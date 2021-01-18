<?php
    class quantri extends PDOConnect
    {
        private $tenbang = 'quantri';
        function __construct()
        {
            parent::__construct();
            //$this->tenbang = 'quantri';
            return $this;
        }
        function themQuantri($params)
        {
            $tc = '(ten, tendangnhap, matkhau, manhom, trangthai, ngaytao, ngaycapnhat, avt)';
            $nd = '(?, ?, ?, ?, ?, ?, ?, ?)';
            return $this->them($this->tenbang, $tc, $nd, $params);
        }
        function suaQuantri($dk, $params)
        {
            $tc = '(ten, tendangnhap, matkhau, manhom, trangthai, ngaycapnhat, avt)';
            $nd = '(?, ?, ?, ?, ?, ?, ?, ?)';
            return $this->sua($this->tenbang, $tc, $nd, $params, $dk );
        }
        function xoaQuantri($id)
        {
            return $this->xoa($this->tenbang, " ma = ?", [$id]);
        }
        function getDanhsach()
        {
            return $this->getDS($this->tenbang);
        }
        function getQuantri($id)
        {
            return $this->getObj($sql, [$id], 1);
        }
    }
?>