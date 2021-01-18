<?php 
include 'core/quantri.php';
$obj = new quantri();
$dsnhom = $obj->dsnhom();
if(isset($_POST['tendangnhap']))
{
    $avt = myupload($_FILES['avt']??[],'images',$msg);
    if($obj->them($_POST['ten'],$_POST['tendangnhap'],$_POST['matkhau'],$_POST['manhom'],$avt))
    {
        $thongbao = '<div class="alert alert-success">Thêm thành công</div>';
    }else{
        $thongbao = '<div class="alert alert-danger">Thêm thất bại</div>';
    }
}
$obj->disconnect();
?>
<div class="row">
    <div class="col-md-12">
            <h3>Thêm người dùng</h3>
            <?=$thongbao??''?>
           <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="">Tên</label>
                   <input type="text" name="ten" id="" class="form-control" placeholder="" aria-describedby="helpId">
               </div>
               <div class="form-group">
                   <label for="">Hình đại diện</label>
                   <input type="file" name="avt" id="" class="form-control" placeholder="" aria-describedby="helpId">
               </div>
               <div class="form-group">
                   <label for="">Tên đăng nhập</label>
                   <input type="text" name="tendangnhap" id="" class="form-control" placeholder="" aria-describedby="helpId">
               </div>
               <div class="form-group">
                   <label for="">Mật khẩu</label>
                   <input type="text" name="matkhau" id="" class="form-control" placeholder="" aria-describedby="helpId">
               </div>
               <div class="form-group">
                   <label for="">Mã nhóm</label>
                   <select  name="manhom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       <option value="">Chọn nhóm</option>
                       <?php 
                       foreach($dsnhom as $nhom)
                       {
                       ?>
                       <option value="<?=$nhom->ma?>"><?=$nhom->ten?></option>
                       <?php } ?>
                    </select>
               </div>
               <div class="form-group">
                   <label for="">Trạng thái</label>
                   <select  name="trangthai" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       <option value="">Chọn trạng thái</option>
                       <option value="2">Khóa</option>
                       <option value="1">Kích hoạt</option>
                    </select>
               </div>  
               <div class="form-group">
                   <input type="submit"  class="btn btn-success btn-sm" value="Ghi">
                   <a href="index.php?page=dsqt"  class="btn btn-danger btn-sm" role="button" >Bỏ qua</a>
               </div>             
           </form>
    </div>
</div>