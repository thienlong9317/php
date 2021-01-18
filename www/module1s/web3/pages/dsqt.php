<?php
include_once ('libs/quantri.php');
$qt =  new quantri();
$data = $qt->getDanhsach();
?>

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
            <td><?=$item->trangthai == 1?"Actived":"Deactive"?></td>
            <td>
                <a href="?page=suaUser&&id=<?=$item->ma?>" type="button" class="btn btn-success">Sửa</a>
                <a href="?page=xoaUser&&id=<?=$item->ma?>" type="button" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php }}?>
    </tbody>
</table>