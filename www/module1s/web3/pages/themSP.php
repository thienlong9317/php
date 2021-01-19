<?php 
    include 'libs/sanpham.php';
    $qt =  new sanpham();
   //$ds = $qt->getDanhsachCha();
    if(isset($_POST) && count($_POST) >0)
    {

        // $ten = $_POST['name']??"";
        // $tt = $_POST['tt']??"";
        // $qt->themNCC([$ten, $tt, date("Y-m-d H:m:s"), null]);
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
    <h1 style="text-align: center;color:red">Thêm sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá</label>
            <input type="text" class="form-control" placeholder="" name="gia">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả</label>
            <input type="text" class="form-control" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="">Hình đại diện</label>
            <input type="file" name="icon" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Video</label>
            <input type="file" name="video" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Mã nhà cung cấp</label>
            <select name="mancc" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <option value="">Chọn</option>
                <?php 
                       foreach($dsnhom as $nhom)
                       {
                       ?>
                <option value="<?=$nhom->ma?>"><?=$nhom->ten?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Mã loại sản phẩm</label>
            <select name="manhom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <option value="">Chọn</option>
                <?php 
                       foreach($dsnhom as $nhom)
                       {
                       ?>
                <option value="<?=$nhom->ma?>"><?=$nhom->ten?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hình chi tiết</label>
            <input type="file" name="icon" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Mô tả chi tiết</label>
            <input type="text" class="form-control" placeholder="" name="tieude">
        </div>
        <div class="form-group">
            <label for="">Mã vạch</label>
            <input type="text" class="form-control" placeholder="" name="tukhoa">
        </div>
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" class="form-control" placeholder="" name="tieude">
        </div>
        <div class="form-group">
            <label for="">Từ khóa</label>
            <input type="text" class="form-control" placeholder="" name="tukhoa">
        </div>
        <div class="form-group">
            <label for="">Mô tả tìm kiếm</label>
            <input type="text" class="form-control" placeholder="" name="mttk">
        </div>
        <div class="form-group">
            <label for="">Hình chia sẻ</label>
            <input type="file" name="hcs" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Tên rút gọn</label>
            <input type="text" class="form-control" placeholder="" name="mttk">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng thái</label>
            <select class="form-control" name="tt">
                <option value="1">Kích hoạt</option>
                <option value="0">Không kích hoạt</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" placeholder="" name="soluong">
        </div>
        <button type="submit" class="btn btn-success" style="justify-content: center;">Thêm</button>
        <a href="?page=sanpham" type="button" class="btn btn-danger" style="justify-content: center;">Bỏ qua </a>
    </form>
</div>