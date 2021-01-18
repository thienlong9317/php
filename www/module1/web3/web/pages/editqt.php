<?php 
if(!isset($_GET['id']))
    chuyentrang('index.php?page=dsqt');
include 'core/quantri.php';
$obj = new quantri();
$user = $obj->item($_GET['id']);
if(!$user)
    chuyentrang('index.php?page=dsqt');
$dsnhom = $obj->dsnhom();
if(isset($_POST['tendangnhap']))
{
    $avt = myupload($_FILES['avt']??[],'images',$msg);
    $avt= $avt?$avt:$user->avt;
    if($obj->sua($user->ma,$_POST['ten'],$_POST['matkhau'],$_POST['manhom'],$_POST['trangthai'],$avt))
    {
        $thongbao = '<div class="alert alert-success">Cập nhật thành công</div>';
    }else{
        $thongbao = '<div class="alert alert-danger">Cập nhật thất bại</div>';
    }
}
$obj->disconnect();
?>
<div class="row">
    <div class="col-md-12">
            <h3>Cập nhật <?=$user->tendangnhap?></h3>
            <?=$thongbao??''?>
           <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="">Tên</label>
                   <input type="text" name="ten" value="<?=$user->ten?>" class="form-control" placeholder="" aria-describedby="helpId">
               </div>
               <div class="form-group">
                   <label for="">Hình đại diện</label>
                   <img src="<?=$user->avt?>" width="50"/>
                   <input type="file" name="avt" id="" class="form-control" placeholder="" aria-describedby="helpId">
               </div>
               <div class="form-group">
                   <label for="">Tên đăng nhập</label>
                   <input readonly type="text" name="tendangnhap" value="<?=$user->tendangnhap?>" class="form-control" placeholder="" aria-describedby="helpId">
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
                       <option <?=$user->manhom==$nhom->ma?'selected':''?> value="<?=$nhom->ma?>"><?=$nhom->ten?></option>
                       <?php } ?>
                    </select>
               </div>
               <div class="form-group">
                   <label for="">Trạng thái</label>
                   <select  name="trangthai" id="" class="form-control" placeholder="" aria-describedby="helpId">
                       <option value="">Chọn trạng thái</option>
                       <option  <?=$user->trangthai==2?'selected':''?>  value="2">Khóa</option>
                       <option  <?=$user->trangthai==1?'selected':''?>  value="1">Kích hoạt</option>
                    </select>
               </div>  
               <div class="form-group">
                   <input type="submit"  class="btn btn-success btn-sm" value="Ghi">
                   <a href="index.php?page=dsqt"  class="btn btn-danger btn-sm" role="button" >Bỏ qua</a>
               </div>             
           </form>
    </div>
</div>