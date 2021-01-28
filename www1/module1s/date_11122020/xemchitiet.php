<?php
include_once("libs/func.php");
$mang = readFileProduct("data/products.txt");

if(isset($_GET["id"]) && $_GET["id"])
{
    $product = $mang[$_GET['id']];
}
else
{
    chuyentrang("danhsach.php");
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
    <div class="container-fluid">
        <div class="form-group">
            <label for="">Mã</label>
            <input type="text" value="<?=$product['ma'] ?>" name="" id="" class=" form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" value="<?=$product['ten'] ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input type="text" value="<?=$product['gia'] ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" value="<?=$product['soluong'] ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Hình</label>
            <img width="300" src="<?=$product['hinh']?$product['hinh']:" images/no_image.png" ?>" />
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" value="<?=$product['mota'] ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Chi tiết</label>
            <input type="text" value="<?=$product['chitiet'] ?>" name="" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <select name="status" id="status" class="form-control">
                <option <?=$product['trangthai']==1?'selected':'' ?> value="1">Active</option>
                <option <?=$product['trangthai']==2?'selected':'' ?> value="2">Deactive</option>
            </select>
        </div>
        <a class="btn btn-sm btn-primary" href="danhsach.php" type="button">Trở về danh sách</a>
    </div>
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