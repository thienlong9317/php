<?php
include_once("libs/func.php");
if(isset($_GET['txtSearch']) && $_GET['txtSearch'])
    $data = lay_thong_tin("Select * from donvi where ma_donvi='".$_GET['txtSearch']."'");
else
{
    if(isset($_POST) && count($_POST) > 0)
    {
        $mhs = $_POST['mhs']??null;
        $ths = $_POST['ths']??null;
        $sql = "Select * from donvi where ".($mhs!=null?" ma_donvi like '%".$mhs."%' and ":"").($ths!=null?" ten_donvi like '%".$ths."%'":"1=1");
        if(!$mhs && !$ths )
            $sql = "Select * from donvi limit 100";
        $data =  lay_thong_tin($sql);
    }
    else if(isset($_GET['show']) && $_GET['show'])
    {
        if($_GET['show'] == 'all')
            $data =  lay_thong_tin("Select * from donvi ");
        else
            $data =  lay_thong_tin("Select * from donvi limit ".$_GET['show']);
    }
    else
        $data =  lay_thong_tin("Select * from donvi limit 100");
}
    
include_once("dautrang.php");
?>

<div class="card mb-4">
    <div class="card-header">
        <h2> <i class="fas fa-table mr-1"></i>Bảng thông tin đơn vị</h2>
        <br>
        <a class="btn  btn-primary" href="index.php?show=500" role="button">Hiện 500</a>
        <a class="btn  btn-primary" href="index.php?show=1000" role="button">Hiện 1000</a>
        <a class="btn  btn-warning" href="index.php?show=all" role="button" title="Thời gian load sẽ lâu hơn">Hiện
            hết</a>

        <p>
        <div>Tìm nâng cao? <a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false"
                aria-controls="login-form-wrap">Nhấn vào để tìm</a>
        </div>
        </p>
        <form id="login-form-wrap" class="login collapse" method="post">
            <label>Mã hồ sơ </label>
            <input type="text" name="mhs" class="input-text">
            <label>Tên đơn vị
            </label>
            <input type="text" name="ths" class="input-text">
            <input type="submit" value="Tìm" name="btnS" class="button">
        </form>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã đơn vị</th>
                        <th>Tên đơn vị</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã đơn vị</th>
                        <th>Tên đơn vị</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if($data){ foreach($data as $var) {?>
                    <tr>
                        <td><?=$var['ma_donvi']?></td>
                        <td class="col-8"><?=$var['ten_donvi']?></td>
                        <td>
                            <div class="float-right">
                                <a class="btn btn-sm btn-primary" href="xemchitiet.php?id=<?=$var['ma_donvi']?>"
                                    role="button">
                                    <i class="fas fa-eye" aria-hidden="true"></i> Xem</a>
                                <a class="btn btn-sm btn-warning" href="sua.php?id=<?=$var['ma_donvi']?>" role="button">
                                    <i class="fas fa-edit" aria-hidden="true"></i> Sửa</a>
                                <a class="btn btn-sm btn-danger" href="xoa.php?id=<?=$var['ma_donvi']?>" role="button"
                                    onclick="return confirm('Bạn có thật sự muốn xóa ?');">
                                    <i class="fas fa-trash" aria-hidden="true"></i> Xóa</a>
                            </div>
                        </td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include_once("cuoitrang.php");
echo date("Y/m/d hh:mm:ss");
?>