<?php 
class PDOConnect
{
    var $cn;
    var $sth;
    var $pdo;
    function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=qlybanhang','root','', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
            $this->pdo->query('set names utf8');
        }
        catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    protected function closeConnect()
    {
        $this->pdo = null;
        $this->sth = null;
    }
    protected function checkPDO()
    {
        if($this->pdo == null)
        {
            $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=qlybanhang','root','', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
            $this->pdo->query('set names utf8');
        }
    }
    protected function truyvan($sql, $params, $type)
    {
        try
        {
            //$cn = getConnect();
            $this->checkPDO();
            $this->sth = $this->pdo->prepare($sql);
            $this->sth->execute($params);
            if($type == 1) //lay 1 gia tri
            {
                $data = $this->sth->fetch(PDO::FETCH_OBJ);
            }
            else if($type == 2) //lay nhieu gia tri
                $data = $this->sth->fetchAll(PDO::FETCH_OBJ);
            $this->closeConnect();
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $data;
    }
    
    protected function xoaComplete($tenbang, $dk, $params)
    {
        try
        {
            $this->checkPDO();
            $sql = "Delete from ".$tenbang." where ".$dk;
            $this->sth = $this->pdo->prepare($sql);
            $kq = $this->sth->execute($params);
            $this->closeConnect();
        }
        catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }
    protected function xoa($tenbang, $dk, $params)
    {
        try
        {
            $this->checkPDO();
            $sql = "update ".$tenbang." set trangthai = 2 where ".$dk;
            $this->sth = $this->pdo->prepare($sql);
            $kq = $this->sth->execute($params);
            $this->closeConnect();
        }
        catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }

    protected function getDS($tenbang)
    {
        try
        {
            //$cn = getConnect();
            $this->checkPDO();
            $sql = 'select * from '.$tenbang;
            $this->sth = $this->pdo->prepare($sql);
            $this->sth->execute();
            $data = $this->sth->fetchAll(PDO::FETCH_OBJ);
            $this->closeConnect();
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $data;
    }

    protected function them($tenbang, $tc, $nd, $params)
    {
        try
        {
            $this->checkPDO();
            $sql = "insert into ".$tenbang.$tc." values ".$nd;
            $this->sth = $this->pdo->prepare($sql);
            $kq = $this->sth->execute($params);
            $this->closeConnect();
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }

    protected function sua($tenbang, $nd, $dk, $params)
    {
        try
        {
            $this->checkPDO();
            $sql = "update ".$tenbang." set ".$nd." where ".$dk;
            // echo $sql;
            // var_dump($params);
            // exit;
            $this->sth = $this->pdo->prepare($sql);
            $kq = $this->sth->execute($params);
            $this->closeConnect();
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }

    protected function getObj($tenbang, $dk, $params)
    {
        try
        {
            //$cn = getConnect();
            $this->checkPDO();
            $sql = 'select * from '.$tenbang.' where '.$dk;
            $this->sth = $this->pdo->prepare($sql);
            $this->sth->execute($params);
            $data = $this->sth->fetchAll(PDO::FETCH_OBJ);
            $this->closeConnect();
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $data;
    }
}
?>