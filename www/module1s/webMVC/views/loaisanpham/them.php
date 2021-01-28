<div class="container-fluid col-8">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red">Thêm loại sản phẩm</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" placeholder="Tên" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="mota">
        </div>
        <div class="form-group">
            <label for="">Icon</label>
            <input type="file" name="hinhdaidien" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mã cha</label>
            <select class="form-control" name="macha">
                <?php foreach ($data as $item) { ?>
                <option value="<?= $item->ma ?>"><?= $item->ten ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tiêu đề</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="tieude">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Từ khóa</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="tukhoa">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả tìm kiếm</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="mttimkiem">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Hình chia sẻ</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="hinhchiase">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên rút gọn</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="tenrutgon">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;">Thêm</button>
    </form>
</div>