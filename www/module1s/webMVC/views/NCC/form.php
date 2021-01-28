<div class="container-fluid col-8">
    <h1 style="text-align: center;color:red"><?= $title ?></h1>
    <?= $tb ?? "" ?>
    <form action="" method="post">
        <?php if ($page == 'edit') { ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mã</label>
            <input type="text" class="form-control" placeholder="" name="ma" <?= $page == 'edit' ? 'readonly' : "" ?>
                value="<?php if (isset($ncc)) {
                                                                                                                                        echo $ncc[0]->ma;
                                                                                                                                    } else echo ""; ?>">
        </div>
        <?php } ?>
        <div class=" form-group">
            <label for="exampleFormControlSelect1">Tên</label>
            <input type="text" class="form-control" placeholder="" name="ten" value="<?php if (isset($ncc)) {
                                                                                            echo $ncc[0]->ten;
                                                                                        } else echo ""; ?>">
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