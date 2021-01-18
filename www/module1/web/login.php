<?php 
ob_start();
include 'libs/funcs.php'; 
if(isset($_COOKIE['src'],$_COOKIE['name']) && $_COOKIE['src'] && $_COOKIE['name'])
{
    //tien hanh dang nhap
    $_SESSION['status_login'] = true;
    $_SESSION['login_name'] = $_COOKIE['name'];
    $_SESSION['login_avt'] = $_COOKIE['avt'];
}
if(islogin())
    chuyentrang('index.php');
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
            chuyentrang('index.php');
        }else{
            $thongbao = '<div class="alert alert-danger">Tài khoản đang bị khóa</div>';
        }
    }else{
        $thongbao = '<div class="alert alert-danger">Thông tin đăng nhập không chính xác</div>'; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'widgets/head.php' ?> 
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>Đăng nhập hệ thống</h1>
              <?=$thongbao?>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-success submit">Đăng nhập</button>
              </div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Web của tui</h1>
                  <p>©<?=date('Y')?> All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
