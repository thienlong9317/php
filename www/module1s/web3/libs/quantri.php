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
        function suaQuantri( $params)
        {
            $dk = ' ma = ?';
            $nd = ' ten = ?, matkhau = ?, manhom = ?, trangthai = ?, ngaycapnhat=?, avt =? ';
            return $this->sua($this->tenbang, $nd,  $dk, $params );
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
            return $this->getObj($this->tenbang," ma = ?", [$id]);
        }
        function login($username, $pw)
        {
            return $this->truyvan('SELECT * FROM `quantri` WHERE tendangnhap =? and matkhau=?', [$username, $pw], 1);
        }
    }
?>