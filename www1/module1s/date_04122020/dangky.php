<?php
include_once("libs/func.php");
$mang = readDataFile("../data/user.txt");
//var_dump($mang);exit;
// if($_POST)
// {
//     print_r ($_POST);
//     print_r ($_FILES);
//     var_dump($_POST);
//     var_dump($_FILES);
//     //exit;
// }

$thongbao = $_SESSION['tb']??'';
unset($_SESSION['tb']);
if(isset($_POST['us'], $_POST['pw']))
{
    //doc file
    if($_POST['us'] && $_POST['pw'])
    {
        $user = $mang[$_POST["us"]]??[];
        if(!$user)
        {
            $kq = uploadFile($_FILES['avt'], "images", trim($_POST["us"]), "jpg|png", 1000000, "df"); //ow: overwrite, df: diffence
            //var_dump($kq);
            //exit;
            if($kq)
            {
                $mang[$_POST["us"]] = [
                    'username'=>trim($_POST["us"]),
                    'password'=>trim($_POST["pw"]),
                    'name'=>trim($_POST["name"]),
                    //'avt'=>"images/".trim($_FILES["avt"]['name'])
                    'avt'=>$kq['path'],
                    'status'=>$_POST['status']
                ];
                $kq = saveuser("../data/user.txt", $mang, "w+");
                if($kq)
                    $thongbao = '<div class="alert alert-success">Đăng ký thành công</div>';   
                else
                    $thongbao = '<div class="alert alert-danger">Đăng ký không thành công</div>';
            }
            else
            {
                $thongbao = '<div class="alert alert-danger">Đăng ký không thành công</div>';
            }
                
        }
        else
            $thongbao = '<div class="alert alert-danger">Username đã tồn tại</div>';
        $_SESSION['tb'] = $thongbao;
        header('location: dangky.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="post" class="container" enctype="multipart/form-data">
        <h3 class="text-center">Đăng ký</h3>
        <?=$thongbao?>
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="us" id="username" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pw" id="password" class="form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avt" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1">Active</option>
                <option value="2">Deactive</option>
            </select>
        </div>
        <div class="form-group text-right">
            <a href="login.php" class="btn btn-sm btn-success">Sign In</a>
            <input type="submit" class="btn btn-sm btn-success" value="Đăng ký">
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>