<?php
include_once("libs/func.php");
if(!isset($_GET['id'],$_GET['sotbqd']) && !$_GET['id'] || !$_GET['sotbqd'])
    chuyentrang("index.php");
else
{
    $data = lay_thong_tin("Select * from thongtin where id_donvi='".$_GET['id']."' and so_tbqd='".$_GET['sotbqd']."'");

    extractFileName($data[0]['ten_file']);
}
    
if(isset($_POST['sotbqd']) && $_POST['sotbqd'])
{
    $sotbqd = $_POST['sotbqd'];
    if($_POST['mota'])
        $mota = $_POST['mota'];
    if($_FILES['fhs']['size'] > 0)
    {
        $kq = uploadFile($_FILES['fhs'], "uploads", trim(extractFileName($_POST["ten_file"])), "docx|doc|pdf|xls|xlsx", 5*1024*1024, "ow"); //ow: overwrite, df: diffence
        if($kq['kq'])
        {
            $path = $kq['tf'];
            if(updatehoso($_POST["madonvi"], $sotbqd, $mota, $path, $_POST['stbqdc']))
            {
                $tb = '<div class="alert alert-success">Cập nhật thành công</div>';
                chuyentrang("xemchitiet.php?id=".$_GET['id']);
            }
            else
            {
                unlink($kq['path']); //xoa file vua up
                $tb = '<div class="alert alert-danger">Cập nhật không thành công</div>';
            }
        }
    }
    else
    {
        echo '<div class="alert alert-success">asdkashdsadjhh</div>';
        if(updatehoso($_POST["madonvi"], $sotbqd, $mota, $_POST['ten_file'], $_POST['stbqdc']))
        {
            $tb = '<div class="alert alert-success">Cập nhật thành công</div>';
            chuyentrang("xemchitiet.php?id=".$_GET['id']);
        }
        else
        {
            $tb = '<div class="alert alert-danger">Cập nhật không thành công</div>';
        }
    }
}
include_once("dautrang.php");
?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Sửa thông tin TB/QĐ cho đơn vị <?=$_GET['id']?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?=$tb??""?>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã đơn vị</label>
                    <input type="text" class="form-control" name="madonvi" id="" aria-describedby="helpId"
                        value="<?=$data[0]['id_donvi']?>" placeholder="" readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ten_file" id="" aria-describedby="helpId"
                        value="<?=$data[0]['ten_file']?>" placeholder="" readonly hidden="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="stbqdc" id="" aria-describedby="helpId"
                        value="<?=$data[0]['so_tbqd']?>" placeholder="" readonly hidden="true">
                </div>
                <div class="form-group">
                    <label for="">Số TB/QĐ</label>
                    <input type="text" class="form-control" name="sotbqd" id="" aria-describedby="helpId"
                        value="<?=$data[0]['so_tbqd']?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="" aria-describedby="helpId"
                        value="<?=$data[0]['mota']?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Upload file hồ sơ </label>
                    <input type="file" class="form-control-file" name="fhs" id="" placeholder=""
                        aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">Định dạng: .doc, .docx, .pdf, .xls,
                        .xlsx</small>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a name="" id="" class="btn btn-danger" href="xemchitiet.php?id=<?=$_GET['id']?>" role="button">Hủy</a>
            </form>
        </div>
    </div>
</div>
</div>
<?php
include_once("cuoitrang.php");
?>