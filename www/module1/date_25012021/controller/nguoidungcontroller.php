<?php
class nguoidungcontroller extends controller
{
    function index()
    {
        include 'model/quantri.php';
        $obj = new quantri();
        $list = $obj->ds();
        $this->render('view/nguoidung/list.php', ['list' => $list]);
    }
    function create()
    {
        $thongbao = '';
        include 'model/quantri.php';
        $obj = new quantri();
        $dsnhom = $obj->dsnhom();
        if(isset($_POST['tendangnhap']))
        {
            $avt = myupload($_FILES['avt']??[],'public/images',$msg);
            if($obj->them($_POST['ten'],$_POST['tendangnhap'],$_POST['matkhau'],$_POST['manhom'],$avt))
            {
                $thongbao = '<div class="alert alert-success">Thêm thành công</div>';
            }else{
                $thongbao = '<div class="alert alert-danger">Thêm thất bại</div>';
            }
        }
        $this->render('view/nguoidung/form.php',['title'=>'Them moi','dsnhom'=>$dsnhom,'thongbao'=>$thongbao]);
    }
    function login()
    {
        if (isset($_COOKIE['src'], $_COOKIE['name']) && $_COOKIE['src'] && $_COOKIE['name']) {
            //tien hanh dang nhap
            $_SESSION['status_login'] = true;
            $_SESSION['login_name'] = $_COOKIE['name'];
            $_SESSION['login_avt'] = $_COOKIE['avt'];
        }
        if (islogin())
            chuyentrang('index.php');
        $thongbao = '';
        if (isset($_POST['username'], $_POST['password'])) {
            include 'model/quantri.php';
            $obj = new quantri();
            $user = $obj->login($_POST['username'], $_POST['password']);
            if ($user) {
                if ($user->trangthai == 1) {
                    $thongbao = '<div class="alert alert-success">Đăng nhập thành công</div>';
                    //tao 1 cờ để kiểm tra đăng nhập cho toàn bộ hệ thống
                    $_SESSION['status_login'] = true;
                    $_SESSION['login_name'] = $user->ten;
                    $_SESSION['login_avt'] = $user->avt;
                    //kiem tra co thu co luu dang nhap k
                    if (isset($_POST['remember']) && $_POST['remember'] == 1) {
                        //luu du lieu vao cookie: time tu quyet dinh
                        $time = time() + 3600;
                        setcookie('src', $_SESSION['status_login'], $time);
                        setcookie('name', $_SESSION['login_name'], $time);
                        setcookie('avt', $_SESSION['login_avt'], $time);
                    }
                    chuyentrang('index.php');
                } else {
                    $thongbao = '<div class="alert alert-danger">Tài khoản đang bị khóa</div>';
                }
            } else {
                $thongbao = '<div class="alert alert-danger">Thông tin đăng nhập không chính xác</div>';
            }
        }
        $this->render('view/nguoidung/login.php', ['thongbao' => $thongbao], 'empty');
    }
    function logout()
    {
        session_destroy();
        setcookie('src', 0, time() - 1);
        setcookie('name', '', time() - 1);
        setcookie('avt', '', time() - 1);
        chuyentrang('index.php');
    }
    function edit()
    {
        $thongbao = '';
        if (!isset($_GET['id']))
            chuyentrang(href('nguoidung'));
        include 'model/quantri.php';
        $obj = new quantri();
        $user = $obj->item($_GET['id']);
        if (!$user)
            chuyentrang(href('nguoidung'));
        $dsnhom = $obj->dsnhom();
      //  xemmang($dsnhom);
        if (isset($_POST['tendangnhap'])) {
            $avt = myupload($_FILES['avt'] ?? [], 'public/images', $msg);
            $avt = $avt ? $avt : $user->avt;
            if ($obj->sua($user->ma, $_POST['ten'], $_POST['matkhau'], $_POST['manhom'], $_POST['trangthai'], $avt)) {
                $thongbao = '<div class="alert alert-success">Cập nhật thành công</div>';
            } else {
                $thongbao = '<div class="alert alert-danger">Cập nhật thất bại</div>';
            }
        }
        $obj->disconnect();
        $this->render('view/nguoidung/form.php',['thongbao'=>$thongbao,'user'=>$user,'dsnhom'=>$dsnhom,'title'=>'Cap nhat']);
    }
    function delete()
    {
        if(!isset($_GET['id']))
            chuyentrang(href('nguoidung'));
        include 'model/quantri.php';
        $obj = new quantri();
        $user = $obj->item($_GET['id']);
        if(!$user)
        chuyentrang(href('nguoidung'));
        $obj->xoa($user->ma);
        $obj->disconnect();
        chuyentrang(href('nguoidung'));
    }
}
