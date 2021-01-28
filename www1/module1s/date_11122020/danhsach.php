<?php
include_once("libs/func.php");
$data = readFileProduct("data/products.txt");
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
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Danh sách sản phẩm</h3>
                <a class="btn btn-sm btn-primary" href="danhsanh.php?hidden=false" type="button">
                    Xem danh sách full
                </a>
                <table class="table table-striped table-inverse table-responsive table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $item){
                            if($item['trangthai'] == 1 ){?>
                        <tr>
                            <td><?=$item['ma']?></td>
                            <td><?=$item['ten']?></td>
                            <td><?=$item['gia']?></td>
                            <td><img width="50" src="<?=$item['hinh']?$item['hinh']:" images/no_image.png"?>"></td>
                            <td> <a class="btn btn-sm btn-primary" href="xemchitiet.php?id=<?=$item['ma']?>"
                                    type="button">
                                    Xem
                                </a>
                                <a class="btn btn-sm btn-danger" href="xoa.php?id=<?=$item['ma']?>" type="button">
                                    Xóa
                                </a>
                                <a class="btn btn-sm btn-warning" href="sua.php?id=<?=$item['ma']?>" type="button">
                                    Sửa
                                </a>
                            </td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>
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