<?php
include_once "libs/func.php";
//kiem tra da login chua
if(!islogin())
    chuyentrang('login.php');
$list = readDataFile('../data/user.txt');
//echo count($list);
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
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
</head>

<body>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="navId">
        <li class="nav-item">
            <a href="dangky.php" class="nav-link">Đăng ký</a>
        </li>
        <li class="nav-item">
            <a href="profile.php" class="nav-link">Xem thông tin</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>

    <script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Danh sách người dùng</h3>
                <table class="table table-striped table-inverse ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Hình</th>
                            <th>Tài khoản</th>
                            <th>Tên</th>
                            <th>Trạng thái</th>
                            <th class="text-right">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                foreach($list as $user)
                                {
                                ?>
                        <tr>
                            <td scope="row"><img src="<?=$user['avt']?$user['avt']:'images/no_image.jpg'?>"
                                    width="50" /></td>
                            <td><?=$user['username']?></td>
                            <td><?=$user['name']?></td>
                            <td>
                                <?=$user['status']==1?'<span class="badge badge-success">Kích hoạt</span>':'<span class="badge badge-dark">Khoá</span>'?>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-sm btn-primary" href="suaThongTin.php?user=<?=$user['username']?>"
                                    role="button">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sửa</a>
                                <a class="btn btn-sm btn-danger" href="xoaUser.php?user=<?=$user['username']?>"
                                    role="button">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Xoá
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
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