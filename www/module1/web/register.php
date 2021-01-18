<?php
include 'libs/funcs.php';
//kiem tra coi dang nhap chua
if(islogin())
    chuyentrang('profile.php');
$thongbao = '';
if(isset($_POST['username'],$_POST['password']))
{
    include 'core/users.php';
    $users = list_user('data/users.txt');
    ///var_dump($users);exit;
    $user  = $users[$_POST['username']]??[];
    if(!$user)
    {        
        $users[$_POST['username']] = [
            'username'=>$_POST['username'],
            'password'=>trim($_POST['password']),
            'status'=>1,
            'name'=>trim($_POST['name']),
            'avt'=>myupload($_FILES['avatar'],'images',$msg),
        ];
        if(save('data/users.txt',$users))            
            $thongbao = '<div class="alert alert-success">Đăng ký thành công</div>';
        else            
            $thongbao = '<div class="alert alert-danger">Quá trình đăng ký xảy ra lỗi</div>'; 
        chuyentrang('register.php');
    }else{
        $thongbao = '<div class="alert alert-danger">Username đã tồn tại</div>'; 
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
    <form method="post" class="container" enctype="multipart/form-data">
        <div class="row">
        <div class="col-6 m-auto">
        <h3 class="text-center">Sign Up</h3>
        <?=$thongbao?>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control" placeholder="" aria-describedby="helpId">            
            <span class="text-danger"><?=$msg??''?></span>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group text-right">
        <a href="login.php" class="btn btn-sm btn-danger">Sign In</a>           <input type="submit" class="btn btn-sm btn-success" value="Submit">            
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