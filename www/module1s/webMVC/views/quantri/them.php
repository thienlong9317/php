<div class="container-fluid col-5">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red"><?= $title ?></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" placeholder="Ten hien thi" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" placeholder="Ten dang nhap" name="us">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" placeholder="Mat Khau" name="mk">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mã nhóm</label>
            <select class="form-control" name="mnhom">
                <?php foreach ($data as $item) { ?>
                <option value="<?= $item->ma ?>"><?= $item->ten ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hình đại diện</label>
            <input type="file" name="avt" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;">Thêm</button>
    </form>
</div>