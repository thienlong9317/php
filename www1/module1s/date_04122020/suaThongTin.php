<?php
include_once("libs/func.php");
$mang = readDataFile("../data/user.txt");

//kiem tra xem dang nhap chua
if(!islogin())
{
    chuyentrang("login.php");
}
if(!isset($_GET['user']) || !$_GET['user'])
    chuyentrang('danhsach.php');
$user = $mang[$_GET['user']];
if(!$user)
    chuyentrang('list.php');
if(isset($_POST['username']))
{
    // xemmang($_FILES['avatar']);
    if($_POST['name'])
        $user['name'] = $_POST['name'];
    if($_POST['pw'])
        $user['password'] = $_POST['pw'];
    $user['status'] = $_POST['status'];    
    //$avt = myupload($_FILES['avatar'],'images',$msg);
    $kq = uploadFile($_FILES['avt'], "images", trim($_POST["username"]), "jpg|png", 1000000, "ow"); //ow: overwrite, df: diffence
    if($kq['kq'])
        $user['avt'] = $kq['path'];
    $mang[$_POST['username']] = $user;
    saveuser("../data/user.txt", $mang, "w+");
    //$mang = readDataFile("../data/user.txt");
}
// $thongbao = $_SESSION['tb']??'';
// unset($_SESSION['tb']);

// if(isset($_POST['user']))
// {
//     $name = explode('.', basename($user['avt']))[0];
//     //echo $name;    exit;
//     if($_FILES['avt']['name'] != "") //co upload file thay the
//     {
//         //$kq = uploadFile($_FILES['avt'], "images", trim($_POST["us"]), "jpg|png", 1000000, "ow"); //ow: overwrite, df: diffence
//         $kq = uploadFile($_FILES['avt'], "images", $name , "jpg|png", 1000000, "ow"); //ow: overwrite, df: diffence
//         if($kq)
//         {
//             $mang[$_POST["us"]] = [
//                 'us'=>trim($_POST["us"]),
//                 'pw'=>$_POST['pw']?trim($_POST["pw"]):$user['pw'],
//                 'name'=>$_POST['name']?trim($_POST["name"]):$user['name'],
//                 //'avt'=>"images/".trim($_FILES["avt"]['name'])
//                 'avt'=>$kq['path'],
//                 "status"=>$_POST['status']
//             ];
//             $kq = saveuser("../data/user.txt", $mang, "w+");
//             if($kq)
//             {
//                 $thongbao = '<div class="alert alert-success">Cập nhật thành công</div>';   
//                 $user = $mang[$_POST["us"]];
//                 $_SESSION['user'] = $user;
//             }
//             else
//                 $thongbao = '<div class="alert alert-danger">Cập nhật không thành công</div>';
//         }
//         else
//         {
//             $thongbao = '<div class="alert alert-danger">Cập nhật không thành công</div>';
//         }
//     }
//     else
//     {
//         $mang[$_POST["us"]] = [
//             'us'=>trim($_POST["us"]),
//             'pw'=>$_POST['pw']?trim($_POST["pw"]):$user['pw'],
//             'name'=>$_POST['name']?trim($_POST["name"]):$user['name'],
//             //'avt'=>"images/".trim($_FILES["avt"]['name'])
//             'avt'=>$user['avt']
//         ];
//         $kq = saveuser("../data/user.txt", $mang, "w+");
//         if($kq)
//         {
//             $thongbao = '<div class="alert alert-success">Cập nhật thành công</div>';  
//             $user = $mang[$_POST["us"]];
//             $_SESSION['user'] = $user;
//         }
//         else
//             $thongbao = '<div class="alert alert-danger">Cập nhật không thành công</div>';
//     }
    
//     $_SESSION['tb'] = $thongbao;
//     header('location: suaThongTin.php');  
// }
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
        <h3 class="text-center">Sửa thông tin</h3>
        <?=$thongbao??''?>
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="<?=$user['username']?>"
                value="<?=$user['username']?>" aria-describedby="helpId" readonly>
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
                <option <?=$user['status']==1?'selected':'' ?> value="1">Active</option>
                <option <?=$user['status']==2?'selected':'' ?> value="2">Deactive</option>
            </select>
        </div>
        <div class="form-group text-right">
            <a href="list.php" class="btn btn-sm btn-success">Thông tin</a>
            <input type="submit" class="btn btn-sm btn-success" value="Cập nhật">
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