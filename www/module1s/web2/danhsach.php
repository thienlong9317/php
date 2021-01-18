<?php
//include_once ('lib/func.php');
//include_once ('lib/PDO.php');
// try{
//     // $cn = new PDO('mysql:host=localhost;port=3306;dbname=qlybanhang','root','');
//     // $cn->query('set names utf8');
//     // $sql =  'select * from quantri ';
//     // $sth = $cn->prepare($sql);
//     // $sth->execute();
//     // $data = $sth->fetchAll(PDO::FETCH_OBJ);
//     // $cn = null;
//     // $sth = null;
//     $pdo = new PDOConnect();
//     $sql =  'select * from quantri ';
//     $params = [];
//     $data = $pdo->truyvan($sql, $params, 2);
// }catch(PDOException $e)
// {
//     exit($e->getMessage());
// }
include ('lib/PDOConnect.php');
include ('lib/quantri.php');
$qt =  new quantri();
$data = $qt->getDanhsach();
?>

<!doctype html>
<html lang="en">

<head>
    <title>danh sach user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <table class="table container-fluid col-8">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Tên đăng nhập</th>
                <th>Trạng thái</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php if($data) {foreach($data as $item){?>
            <tr>
                <td><?=$item->ma?></td>
                <td><?=$item->ten?></td>
                <td><?=$item->tendangnhap?></td>
                <td><?=$item->trangthai?></td>
                <td>
                    <a href="suaUser.php?id=<?=$item->ma?>" type="button" class="btn btn-success">Sửa</a>
                    <a href="xoaUser.php?id=<?=$item->ma?>" type="button" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php }}?>
        </tbody>
    </table>
    <div class="container-fluid col-8" style="text-align: center">
        <a href="themUser.php" type="button" class="btn btn-success" style="text-align:center">Thêm người dùng</a>
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