<div class="container-fluid col-8">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red">Thêm sản phẩm</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" placeholder="Tên" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá</label>
            <input type="text" class="form-control" placeholder="Giá" name="gia">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="mota">
        </div>
        <div class="form-group">
            <label for="">Hình đại diện</label>
            <input type="file" name="hinhdaidien" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Video</label>
            <input type="file" name="video" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mã nhà cung cấp</label>
            <select class="form-control" name="mNCC">
                <?php foreach ($data as $item) { ?>
                    <option value="<?= $item->ma ?>"><?= $item->ten ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mã loại</label>
            <select class="form-control" name="mLoai">
                <?php foreach ($data as $item) { ?>
                    <option value="<?= $item->ma ?>"><?= $item->ten ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hình chi tiết</label>
            <input type="file" name="hinhchitiet" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả chi tiết</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="mtChitiet">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mã vạch</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="mavach">
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
            <label for="exampleFormControlInput1">Số lượng</label>
            <input type="text" class="form-control" placeholder="Mô tả" name="soluong">
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