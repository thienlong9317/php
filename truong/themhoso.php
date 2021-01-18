<?php
//$_POST
include_once("libs/func.php");
if(!isset($_GET['id']) && !$_GET['id'])
    chuyentrang("index.php");
else
{
    $data = lay_thong_tin("Select * from donvi where ma_donvi='".$_GET['id']."'");
}

if(isset($_POST['sotbqd']) && $_POST['sotbqd'])
{
    $sotbqd = $_POST['sotbqd'];
    if($_POST['mota'])
        $mota = $_POST['mota'];
    $kq = uploadFile($_FILES['fhs'], "uploads", trim($_POST["id"]), "docx|doc|pdf|xls|xlsx", 5*1024*1024, "df"); //ow: overwrite, df: diffence
    if($kq['kq'])
    {
        $path = $kq['tf'];
        if(savehoso($_POST["id"], $sotbqd, $mota, $path))
            $tb = '<div class="alert alert-success">Thêm mới thành công</div>';
        else
        {
            unlink($kq['path']); //xoa file vua up
            $tb = '<div class="alert alert-danger">Thêm mới không thành công</div>';
        }
    }
}

include_once("dautrang.php");
?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Thêm hồ sơ cho công ty mã <?=$_GET['id']?> (<?=$data[0]['ten_donvi']?>)
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?=$tb??""?>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="id" id="" aria-describedby="helpId"
                        value="<?=$_GET['id']?>" placeholder="" readonly hidden="true">
                </div>
                <div class="form-group">
                    <label for="">Số TB/QĐ</label>
                    <input type="text" class="form-control" name="sotbqd" id="" aria-describedby="helpId"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Upload file hồ sơ </label>
                    <input type="file" class="form-control-file" name="fhs" id="" placeholder=""
                        aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">Định dạng: .doc, .docx, .pdf, .xls,
                        .xlsx</small>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
                <a class="btn btn-danger" href="sua.php?id=<?=$_GET['id']?>" role="button"> Hủy bỏ</a>
            </form>
        </div>
    </div>
</div>
</div>
<?php
include_once("cuoitrang.php");
?>