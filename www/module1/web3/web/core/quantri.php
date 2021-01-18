<?php 
class quantri  extends database
{
    function login($username,$pass)
    {
        $user = $this->setquery('SELECT * FROM `quantri` WHERE tendangnhap =? and matkhau=?')
                ->loadrow([$username, $pass]);
        //$this->disconnect();   
        return $user;
    }
    function ds()
    {
        $user = $this->setquery('SELECT * FROM `quantri` ')
                ->loadrows();
        //$this->disconnect();   
        return $user;
    }
    function them($ten,$tendn,$mk,$manhom,$avt)
    {
        $user = $this->setquery('INSERT INTO `quantri` (`ten`, `tendangnhap`, `matkhau`, 
`manhom`, `trangthai`, `ngaytao`, `ngaycapnhat`, `avt`) 
        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?);')
                ->save([$ten,$tendn,$mk,$manhom,1,date('Y-m-d H:i:s'),date('Y-m-d H:i:s'),$avt]);
        //$this->disconnect();   
        return $user;
    }
    function dsnhom()
    {
        $user = $this->setquery('SELECT * FROM `nhomquantri` where trangthai=1')
                ->loadrows();
        //$this->disconnect();   
        return $user;
    }
}