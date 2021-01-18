<?php
class database
{
    var $sql,$pdo,$statement;
    function __construct()
    {
        try{
            $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=data','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
            $this->pdo->query('set names utf8');        
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function setquery($sql)
    {
        $this->sql = $sql;
        return $this;
    }
    function loadrow($params=[])
    {
        try{
            $this->statement  = $this->pdo->prepare($this->sql);           
            $this->statement->execute($params);
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function loadrows($params=[])
    {
        try{
            $this->statement  = $this->pdo->prepare($this->sql);           
            $this->statement->execute($params);
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function save($params=[])
    {
        try{
            $this->statement  = $this->pdo->prepare($this->sql);           
            return $this->statement->execute($params);
        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }
    }
    function disconnect()
    {
        $this->pdo=null;
        $this->statement=null;
    }
}