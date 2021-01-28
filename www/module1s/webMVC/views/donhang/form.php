<div class="container-fluid col-8">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red"><?= $title ?></h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Số đơn hàng</label>
            <input type="text" class="form-control" placeholder="" name="sdh" <?= $page == 'edit' ? 'readonly' : "" ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mã khách hàng</label>
            <input type="text" class="form-control" placeholder="" name="mkh" <?= $page == 'edit' ? 'readonly' : "" ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tổng tiền</label>
            <input type="text" class="form-control" placeholder="" name="tongtien"
                <?= $page == 'edit' ? 'readonly' : "" ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Phí ship</label>
            <input type="text" class="form-control" placeholder="" name="phiship"
                <?= $page == 'edit' ? 'readonly' : "" ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Trạng thái đơn hàng</label>
            <input type="text" class="form-control" placeholder="" name="ttdh" <?= $page == 'edit' ? 'readonly' : "" ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1" <?php if (isset($ncc) && $ncc[0]->trangthai == 1) echo 'selected';
                                    else echo ""; ?>>Active</option>
                <option value="0" <?php if (isset($ncc) && $ncc[0]->trangthai == 0) echo 'selected';
                                    else echo ""; ?>>Deactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;"><?= $action ?></button>
    </form>
</div>