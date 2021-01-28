<?php 
    include 'libs/nhomquantri.php';
    if(isset($_POST) && count($_POST) >0)
    {
        include 'libs/nhacungcap.php';
        $qt =  new nhacungcap();
        $ten = $_POST['name']??"";
        $tt = $_POST['tt']??"";
        
        $qt->themNCC([$ten, $tt, date("Y-m-d H:m:s"), null]);
        if($qt)
        {
            $tb = '<div class="alert alert-success">Thêm thành công</div>';
        }
        else
        {
            $tb = '<div class="alert alert-danger">Thêm không thành công</div>';
        }
    }
?>

<div class="container-fluid col-5">
    <?=$tb??""?>
    <h1 style="text-align: center;color:red">Thêm nhà cung cấp</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" placeholder="Tên nhà cung cấp" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1">Kích hoạt</option>
                <option value="0">Không kích hoạt</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;">Thêm</button>
        <a href="?page=dsNCC" type="button" class="btn btn-danger" style="justify-content: center;">Bỏ qua </a>
    </form>
</div>