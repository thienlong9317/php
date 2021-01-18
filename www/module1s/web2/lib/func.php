<?php
    include ('PDO.php');
    function getConnect()
    {
        try
        {
            $cn = new PDO('mysql:host=localhost;port=3306;dbname=qlybanhang','root','', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
            $cn->query('set names utf8');
        }
        catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $cn;
    }
    function closeConnect($cn, $sth)
    {
        $cn = null;
        $sth = null;
    }
    function truyVan($sql, $params, $type)
    {
        try
        {
            $cn = getConnect();
            $sth = $cn->prepare($sql);
            $sth->execute($params);
            if($type == 1) //lay 1 gia tri
            {
                $data = $sth->fetch(PDO::FETCH_OBJ);
            }
            else if($type == 2) //lay nhieu gia tri
                $data = $sth->fetchAll(PDO::FETCH_OBJ);
            closeConnect($cn, $sth);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $data;
    }

    function xoa($tenbang, $dk, $params)
    {
        try
        {
            $cn = getConnect();
            $sql = "Delete from ".$tenbang." where ".$dk;
            $sth = $cn->prepare($sql);
            $kq = $sth->execute($params);
            closeConnect($cn, $sth);
        }
        catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }

    function update($tenbang, $nd, $dk, $params)
    {
        try
        {
            $cn = getConnect();
            $sql = "update ".$tenbang." set ".$nd." where ".$dk;
            $sth = $cn->prepare($sql);
            $kq = $sth->execute($params);
            closeConnect($cn, $sth);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }

    function them($tenbang, $nd, $params)
    {
        try
        {
            $cn = getConnect();
            $sql = "insert into ".$tenbang." values ".$nd;
            $sth = $cn->prepare($sql);
            $kq = $sth->execute($params);
            closeConnect($cn, $sth);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
        return $kq;
    }

    
    function chuyentrang($path)
    {
        header("location:".$path);
        exit;
    }

    function xoaUser($id)
    {
        $params = [$id];
        $pdo = new PDOConnect();
        $pdo->xoa("quantri", " ma = ?", $params);
    }
?>