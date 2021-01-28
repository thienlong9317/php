<table class="table container-fluid col-12">
    <thead>
        <tr>
            <th>Ngày đặt</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Giá giảm</th>
            <th>Trạng thái</th>
            <!-- <th>Tác vụ</th> -->
        </tr>
    </thead>
    <tbody>
        <?php if ($data) {
            foreach ($data as $item) { ?>
        <tr>
            <td><?= $item->ngaydat ?></td>
            <td><?= $item->sanpham ?></td>
            <td><?= $item->soluong ?></td>
            <td><?= $item->gia ?></td>
            <td><?= $item->giagiam ?></td>
            <td><?= $item->trangthai ?></td>
        </tr>
        <?php }
        } ?>
    </tbody>

</table>