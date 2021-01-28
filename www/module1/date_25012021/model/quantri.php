<?php 
class quantri  extends database
{
    function login($username,$pass)
    {
        $user = $this->setquery('SELECT * FROM `quantri` WHERE tendangnhap =? and matkhau=? and trangthai!=0')
                ->loadrow([$username, $pass]);
        //$this->disconnect();   
        return $user;
    }
    function ds()
    {
        $user = $this->setquery('SELECT * FROM `quantri` where  trangthai!=0')
                ->loadrows();
        //$this->disconnect();   
        return $user;
    }
    function item($id)
    {
        $user = $this->setquery('SELECT * FROM `quantri` where ma=? and trangthai!=0')
                ->loadrow([$id]);
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
    function sua($ma,$ten,$mk,$manhom,$trangthai,$avt)
    {
        if($mk)
        {
        return  $this->setquery('update `quantri` set `ten`=?, `matkhau`=?, 
                        `manhom` =?, `trangthai`=?,  `ngaycapnhat`=?, `avt`=? 
                        where `ma`=? and trangthai!=0
                    ')->save([$ten,$mk,$manhom,$trangthai,now(),$avt,$ma]);

        }else{
            return  $this->setquery('update `quantri` set `ten`=?, 
            `manhom` =?, `trangthai`=?,  `ngaycapnhat`=?, `avt`=? 
            where `ma`=? and trangthai!=0
        ')->save([$ten,$manhom,$trangthai,now(),$avt,$ma]);
        }              
    }
    function xoa($ma)
    {      
        return  $this->setquery('update `quantri` set `trangthai`=0,  `ngaycapnhat`=?
                        where `ma`=? and trangthai!=0
                    ')->save([now(),$ma]);
               
    }
    function dsnhom()
    {
        $user = $this->setquery('SELECT * FROM `nhomquantri` where trangthai=1')
                ->loadrows();
        //$this->disconnect();   
        return $user;
    }
}