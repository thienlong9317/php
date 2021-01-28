<table class="table container-fluid col-8">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Tác vụ</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) {
            foreach ($data as $item) { ?>
        <tr>
            <td><?= $item->ma ?></td>
            <td><?= $item->ten ?></td>
            <td>
                <a href="<?= href('khachhang', 'edit', ['id' => $item->ma]) ?>" type="button"
                    class="btn btn-success">Sửa</a>
            </td>
        </tr>
        <?php }
        } ?>
    </tbody>
</table>