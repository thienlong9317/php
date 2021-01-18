<?php
include_once("libs/func.php");
include_once("dautrang.php");
if($_GET != null)
{
    if(isset($_GET['txtma'], $_GET['txtten']) && $_GET['txtma'] && $_GET['txtten'])
    {
        if(saveDonvi($_GET['txtma'], $_GET['txtten']))
        {
            $tb = '<div class="alert alert-success">Thêm mới thành công</div>';
        }
        else
        {
            $tb = '<div class="alert alert-danger">Thêm mới không thành công</div>';
        }
    }
    else
    {
        $tb = '<div class="alert alert-danger">Thông tin không đầy đủ</div>';
    }
}

?>
<div class="card mb-4">
    <div class="card-header">
        <h3>Thêm thông tin mới</h3>
    </div>
    <div class="card-body">
        <?=$tb??""?>
        <form method="get">
            <div class="form-group">
                <label for="">Mã đơn vị</label>
                <input type="text" name="txtma" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Tên đơn vị</label>
                <input type="text" name="txtten" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
			<button type="submit" class="btn btn-primary m-3" style="height:40px;width:70px;padding:auto" >Thêm</button>
			<a name="" id="" class="btn btn-danger m-3" style="height:40px;width:70px;padding:auto" href="index.php" role="button">Hủy</a>
			<button type="reset" class="btn btn-warning m-3" style="height:40px;width:70px;padding:auto">Làm lại</button>

        </form>
    </div>
</div>
</div>
<?php
include_once("cuoitrang.php");
?>