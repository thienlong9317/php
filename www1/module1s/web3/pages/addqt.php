<?php 
    include 'libs/nhomquantri.php';
    $nqt = new nhomquantri();
    $data = $nqt->getDanhsach();
    if(isset($_POST) && count($_POST) >0)
    {
        include 'libs/quantri.php';
        $qt =  new quantri();
        $ten = $_POST['name']??"";
        $us = $_POST['us']??"";
        $mk = $_POST['mk']??"";
        $mnhom = $_POST['mnhom']??"";
        $tt = $_POST['tt']??"";
        
        $qt->themQuantri([$ten, $us, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, null]);
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
    <h1 style="text-align: center;color:red">Thêm người dùng</h1>
    <form action="" method="post">
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
                <?php foreach($data as $item)
                    {?>
                <option value="<?=$item->ma?>"><?=$item->ten?></option>
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
        <button type="submit" class="btn btn-success" style="justify-content: center;">Thêm</button>
    </form>
</div>