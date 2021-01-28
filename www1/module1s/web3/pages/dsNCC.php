<?php
include_once ('libs/nhacungcap.php');
$qt =  new nhacungcap();
$data = $qt->getDanhsach();
?>

<table class="table container-fluid col-8">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Tác vụ</th>
        </tr>
    </thead>
    <tbody>
        <?php if($data) {foreach($data as $item){?>
        <tr>
            <td><?=$item->ma?></td>
            <td><?=$item->ten?></td>
            <td><?=$item->trangthai == 1?"Actived":"Deactive"?></td>
            <td><?=$item->ngaytao?></td>
            <td><?=$item->ngaycapnhat?></td>
            <td>
                <a href="?page=suaNCC&&id=<?=$item->ma?>" type="button" class="btn btn-success">Sửa</a>
                <a href="?page=xoaNCC&&id=<?=$item->ma?>" type="button" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php }}?>
    </tbody>
</table>