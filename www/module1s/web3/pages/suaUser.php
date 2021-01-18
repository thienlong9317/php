<?php 
    include 'libs/nhomquantri.php';
    include_once 'libs/quantri.php';
    $nqt = new nhomquantri();
    $data = $nqt->getDanhsach();
    $qt = new quantri();
    $qt = $qt->getquantri($_GET['id']);
    // echo $qt[0]->ten;
    // exit;
    // var_dump($qt);
    // exit;
    if(isset($_POST) && count($_POST) >0)
    {
        $ten = $_POST['name']??"";
        $us = $_POST['us']??"";
        $mk = $_POST['mk']??"";
        $mnhom = $_POST['mnhom']??"";
        $tt = $_POST['tt']??"";
        var_dump($_POST);
        exit;
        $qt->suaQuantri([$ten, $us, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null]);
        if($qt)
        {
            $tb = '<div class="alert alert-success">Sửa thành công</div>';
        }
        else
        {
            $tb = '<div class="alert alert-danger">Sửa không thành công</div>';
        }
    }
?>

<div class="container-fluid col-5">
    <?=$tb??""?>
    <h1 style="text-align: center;color:red">Sửa thông tin quản trị</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" name="name" value="<?=$qt[0]->ten?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" value="<?=$qt[0]->tendangnhap?>" name=" us">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" value="<?=$qt[0]->matkhau?>" name=" mk">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mã nhóm</label>
            <select class="form-control" name="mnhom">
                <?php foreach($data as $item)
                    {?>
                <option value="<?=$item->ma?>" <?=$qt[0]->manhom==$item->ma?'selected':"" ?>><?=$item->ten?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1" <?=$qt[0]->trangthai==1?'selected':"" ?>>Active</option>
                <option value="0" <?=$qt[0]->trangthai==0?'selected':"" ?>>Deactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;">Cập nhật</button>
    </form>
</div>