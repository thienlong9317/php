<div class="container-fluid col-5">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red"><?= $title ?></h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" name="name" value="<?= $qt1[0]->ten ?? "" ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" value="<?= $qt1[0]->tendangnhap ?? "" ?>"
                <?= $page == 'edit' ? 'readonly' : "" ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" name=" mk">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mã nhóm</label>
            <select class="form-control" name="mnhom">
                <?php foreach ($manhom as $item) { ?>
                <option value="<?= $item->ma ?>" <?php if (isset($qt1)) {
                                                            if ($qt1[0]->manhom == $item->ma)  echo 'selected';
                                                            else echo "";
                                                        } ?>>
                    <?= $item->ten ?>
                </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1" <?php if (isset($qt1) && $qt1[0]->trangthai == 1) echo 'selected';
                                    else echo ""; ?>>Active</option>
                <option value="0" <?php if (isset($qt1) && $qt1[0]->trangthai == 0) echo 'selected';
                                    else echo ""; ?>>Deactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hình đại diện</label>
            <img src="<?php if (isset($qt1) && $qt1[0]->avt != null) {
                            echo $qt1[0]->avt;
                        } else echo "images/no_image.png" ?>" style="width:50px;height:50px"></img>
            <input type="file" name="avt" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;"><?= $action ?></button>
    </form>
</div>