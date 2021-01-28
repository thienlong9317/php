<table class="table container-fluid col-12">
    <thead>
        <tr>
            <th>Tên</th>
            <th>Hình đại diện</th>
            <th>Tác vụ</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) {
            foreach ($data as $item) { ?>
        <tr>
            <td><?= $item->ten ?></td>
            <td><img src=" <?= $item->icon ?? 'images/no_image.png' ?>" class="img-circle elevation-2"
                    style="width:50px;height:50px" alt="Hình đại diện"></td>
            <td>
                <a href="<?= href('loaisanpham', 'edit', ['id' => $item->ma]) ?>" type="button"
                    class="btn btn-success">Sửa</a>
                <a onclick="return confirm('Có chắc chắn muốn xóa không ?')"
                    href="<?= href('loaisanpham', 'delete', ['id' => $item->ma]) ?>" type="button"
                    class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php }
        } ?>
    </tbody>
</table>