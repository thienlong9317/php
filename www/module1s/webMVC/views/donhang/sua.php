<div class="container-fluid col-8">
    <?= $tb ?? "" ?>
    <h1 style="text-align: center;color:red">Sửa thông tin đơn hàng</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Mã</label>
            <input type="text" class="form-control" placeholder="" name="ma" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tên</label>
            <input type="text" class="form-control" placeholder="" name="ten">
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;">Cập nhật</button>
    </form>
</div>