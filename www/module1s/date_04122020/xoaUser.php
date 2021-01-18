<?php
include_once("libs/func.php");
$mang = readDataFile("../data/user.txt");

//kiem tra xem dang nhap chua
if(!isset($_SESSION['user']))
{
    chuyentrang("login.php");
}
else
{
    $user = $_SESSION['user'];
}

$thongbao = $_SESSION['tb']??'';
unset($_SESSION['tb']);

if(isset($_POST['us']))
{
    $thongbao = '<div class="alert alert-success">Xóa thành công</div>';   
    $thongbao = '<div class="alert alert-danger">Xóa không thành công</div>';
    $_SESSION['tb'] = $thongbao;
    header('location: xoaUser.php');  
}
if(isset($_GET["user"]) && $_GET["user"])
{
    unset($mang[$_GET["user"]]);
    saveuser("../data/user.txt", $mang, "w+");
    chuyentrang("list.php");
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
        <h3 class="text-center">Xóa người dùng</h3>
        <?=$thongbao??""?>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="us" id="username" class="form-control" placeholder="<?=$user['us']?>"
                value="<?=$user['us']?>" aria-describedby="helpId" readonly>
        </div>
        <div class="form-group text-right">
            <a href="login.php" class="btn btn-sm btn-success">Login</a>
            <input type="submit" class="btn btn-sm btn-danger" value="Xóa">
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