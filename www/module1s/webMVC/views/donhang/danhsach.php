<table class="table container-fluid col-12">
    <thead>
        <tr>
            <th>Ngày đặt</th>
            <th>Số đơn hàng</th>
            <th>Mã khách hàng</th>
            <th>Tổng tiền</th>
            <th>Phí ship</th>
            <th>Trạng thái đơn hàng</th>
            <th>Tác vụ</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) {
            foreach ($data as $item) { ?>
        <tr>
            <td><?= $item->ngaydat ?></td>
            <td><?= $item->sodonhang ?></td>
            <td><?= $item->makhachhang ?></td>
            <td><?= $item->tongtien ?></td>
            <td><?= $item->phiship ?></td>
            <td><?= $item->trangthaidonhang ?></td>
            <td>
                <a href="<?= href('donhang', 'edit', ['id' => $item->ma]) ?>" type="button" class="btn btn-success"><i
                        class="fas fa-pen-square" aria-hidden="true"></i> Sửa</a>

            </td>
        </tr>
        <?php }
        } ?>
    </tbody>
</table>