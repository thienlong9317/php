<?php
try{
    //b1+2: mo ket noi sql: PDO va chon db
    $cn = new PDO('mysql:host=localhost;port=3306;dbname=data','root','');
    //chuyen bang ma sql ve utf tren web
    $cn->query('set names utf8');
    //var_dump($cn);   
    //b3: tao cau truy van can thuc thi
    $sql =  'select * from sanpham';
    //b3.1: gui lenh sql xuong cho mysql thuc thi
    // pt thuc thi cau truy van chon: query(sql) - >resource (obj) , => false
    // pt thuc thi cau truy cap nhat: exec(sql) -> so dong tac dong => false
    $rs = $cn->query($sql);
    //chuyen doi du lieu tu sql qua php
    //du lieu can
    $data = $rs->fetchAll(PDO::FETCH_OBJ);
    //xu ly giao dien
    //echo '<pre>',print_r($data),'</pre>';
    foreach($data as $item)
    {
        echo $item->ten.':'.$item->gia.'<br>';
    }
    //b5: dong ket noi
    $cn = null;
  
}catch(PDOException $e)
{
    exit($e->getMessage());
}