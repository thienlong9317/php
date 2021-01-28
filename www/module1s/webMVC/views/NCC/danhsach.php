<?php

?>

<table class="table container-fluid col-8">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Trạng thái</th>
            <th>Tác vụ</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) {
            foreach ($data as $item) { ?>
        <tr>
            <td><?= $item->ma ?></td>
            <td><?= $item->ten ?></td>
            <td><?= $item->trangthai == 1 ? "Actived" : "Deactive" ?></td>
            <td>
                <a href="<?= href('NCC', 'edit', ['id' => $item->ma]) ?>" type="button" class="btn btn-success">Sửa</a>
                <a onclick="return confirm('Có chắc chắn muốn xóa không ?')"
                    href="<?= href('NCC', 'delete', ['id' => $item->ma]) ?>" type="button"
                    class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php }
        } ?>
    </tbody>
</table>