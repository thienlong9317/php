<?php
include 'libs/funcs.php';
if(isset($_COOKIE['src'],$_COOKIE['name']) && $_COOKIE['src'] && $_COOKIE['name'])
{
    //tien hanh dang nhap
    $_SESSION['status_login'] = true;
    $_SESSION['login_name'] = $_COOKIE['name'];
    $_SESSION['login_avt'] = $_COOKIE['avt'];
}
if(islogin())
    chuyentrang('profile.php');
$thongbao = '';
if(isset($_POST['username'],$_POST['password']))
{
    include 'core/users.php';
    $users = list_user('data/users.txt');
    ///var_dump($users);exit;
    //thay doan kiem tra admin 123 thanh vong lap check trong users
    //nang cap cach kiem tra thong tin
    $user  = $users[$_POST['username']]??[];
    if($user &&  $_POST['password'] ==$user['password'])
    {        
        if($user['status']==1)
        {
            $thongbao = '<div class="alert alert-success">Đăng nhập thành công</div>';
            //tao 1 cờ để kiểm tra đăng nhập cho toàn bộ hệ thống
            $_SESSION['status_login'] = true;
            $_SESSION['login_name'] = $user['name'];
            $_SESSION['login_avt'] = $user['avt'];
            //kiem tra co thu co luu dang nhap k
            if(isset($_POST['remember']) && $_POST['remember'] ==1)
            {
                //luu du lieu vao cookie: time tu quyet dinh
                $time= time()+3600;
                setcookie('src', $_SESSION['status_login'],$time);
                setcookie('name', $_SESSION['login_name'],$time);
                setcookie('avt', $_SESSION['login_avt'],$time);
            }
            chuyentrang('profile.php');
        }else{
            $thongbao = '<div class="alert alert-danger">Tài khoản đang bị khóa</div>';
        }
    }else{
        $thongbao = '<div class="alert alert-danger">Thông tin đăng nhập không chính xác</div>'; 
    }
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
    <form method="post" class="container">
        <div class="row">
        <div class="col-6 m-auto">
        <h3 class="text-center">Login</h3>
        <?=$thongbao?>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="remember"><input  value="1" type="checkbox" name="remember" id="remember" > Remember me</label>           <br>
            <a href="register.php">Create new account</a>
        </div>
        <div class="form-group text-right">
            <input type="submit" class="btn btn-sm btn-success" value="Login">            
        </div>
        </div>
        </div>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>