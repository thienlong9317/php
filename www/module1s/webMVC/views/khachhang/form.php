<div class="container-fluid col-8">
    <h1 style="text-align: center;color:red"><?= $title ?></h1>
    <?= $tb ?? "" ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Mã</label>
            <input type="text" class="form-control" placeholder="" name="ma" <?= $page == 'edit' ? 'readonly' : "" ?>
                value="<?php if (isset($kh)) {
                                                                                                                                    echo $kh[0]->ma;
                                                                                                                                } else echo ""; ?>">
        </div>
        <div class=" form-group">
            <label for="exampleFormControlSelect1">Tên</label>
            <input type="text" class="form-control" placeholder="" name="ten" value="<?php if (isset($kh)) {
                                                                                            echo $kh[0]->ten;
                                                                                        } else echo ""; ?>">
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;"><?= $action ?></button>
    </form>
</div>