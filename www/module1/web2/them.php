<?php
try{
    //b1+2: mo ket noi sql: PDO va chon db
    $cn = new PDO('mysql:host=localhost;port=3306;dbname=data','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    //chuyen bang ma sql ve utf tren web
    $cn->query('set names utf8');
    // $us = $_POST['username'];
    //$ps = $_POST['password'];
    //var_dump($cn);   
    //b3: tao cau truy van can thuc thi
    //echo $sql =  "SELECT * FROM `quantri` WHERE tendangnhap ='$us' and matkhau='$ps'";
    $sql =  "SELECT * FROM `quantri` ";
    //sql statement
    $statement  = $cn->prepare($sql);
    //b3.1: gui lenh sql xuong cho mysql thuc thi
    // pt thuc thi cau truy van chon: query(sql) - >resource (obj) , => false
    // pt thuc thi cau truy cap nhat: exec(sql) -> so dong tac dong => false
    //$rs = $cn->query($sql);
    //thuc thi lenh: execute()
    $statement->execute();
    //chuyen doi du lieu tu sql qua php
    //du lieu can
    //$user = $rs->fetchAll(PDO::FETCH_OBJ);
    //goi du lieu thong statment
    $users = $statement->fetchall(PDO::FETCH_OBJ);
    //xu ly giao dien
   // echo '<pre>',print_r($user),'</pre>';
    // if($user)
    // {
    //     $thongbao = '<div class="alert alert-success">Đăng nhập thành công</div>'; 
    // }else{
    //     $thongbao = '<div class="alert alert-danger">Thông tin đăng nhập không chính xác</div>'; 
    // }
    
    //b5: dong ket noi
    $cn = null;
    $statement = null;

}catch(PDOException $e)
{
    exit($e->getMessage());
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <table class="table table-striped table-inverse table-responsive">
       <thead class="thead-inverse">
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Username</th>
           </tr>
           </thead>
           <tbody>
           <?php 
           foreach ($users as $user) {            
           ?>
               <tr>
                   <td scope="row"><?=$user->ma?></td>
                   <td><?=$user->ten?></td>
                   <td><?=$user->tendangnhap?></td>
               </tr>
           <?php } ?>
           </tbody>
   </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>