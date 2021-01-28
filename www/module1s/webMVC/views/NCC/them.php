<div class="container-fluid col-8">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red">Thêm nhà cung cấp</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" placeholder="Tên" name="name">
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