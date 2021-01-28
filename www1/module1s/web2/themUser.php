<?php 
    include 'lib/PDOConnect.php';
    include 'lib/nhomquantri.php';
    $nqt = new nhomquantri();
    $data = $nqt->getDanhsach();
    if(isset($_POST) && count($_POST) >0)
    {
        include 'lib/quantri.php';
        $qt =  new quantri();
        $ten = $_POST['name']??"";
        $us = $_POST['us']??"";
        $mk = $_POST['mk']??"";
        $mnhom = $_POST['mnhom']??"";
        $tt = $_POST['tt']??"";
        date_default_timezone_set("Asia/Bangkok");
        $qt->themQuantri([$ten, $us, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, null]);
        if($qt)
        {
            $tb = '<div class="alert alert-success">Them thành công</div>';
        }
        else
        {
            $tb = '<div class="alert alert-danger">Them không thành công</div>';
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
    <div class="container-fluid col-5">
        <?=$tb??""?>
        <h1 style="text-align: center;color:red">Thêm người dùng</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tên</label>
                <input type="text" class="form-control" placeholder="Ten hien thi" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Username</label>
                <input type="text" class="form-control" placeholder="Ten dang nhap" name="us">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" placeholder="Mat Khau" name="mk">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Mã nhóm</label>
                <select class="form-control" name="mnhom">
                    <?php foreach($data as $item)
                    {?>
                    <option value="<?=$item->ma?>"><?=$item->ten?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Trạng thái</label>
                <select class="form-control" name="tt">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success" style="justify-content: center;">Thêm</button>
        </form>
    </div>
    <a href="danhsach.php">Danh sach</a>
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