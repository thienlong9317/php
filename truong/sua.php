<?php
include_once("libs/func.php");
if(!isset($_GET['id']) && !$_GET['id'])
    chuyentrang("index.php");
else
{
    $data = lay_thong_tin("Select * from donvi where ma_donvi='".$_GET['id']."'");
    $data1 = lay_thong_tin("Select * from thongtin where id_donvi='".$_GET['id']."'");
}
    
if(isset($_POST['madonvi'], $_POST['tendonvi']) && $_POST['madonvi'] && $_POST['tendonvi'])
{
    updateDonvi($_POST['madonvi'], $_POST['tendonvi']);
    chuyentrang("sua.php?id=".$_GET['id']);
}
include_once("dautrang.php");
?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Sửa thông tin <?=$_GET['id']?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form method="post">
                <div class="form-group">
                    <label for="">Mã đơn vị</label>
                    <input type="text" class="form-control" name="madonvi" id="" aria-describedby="helpId"
                        value="<?=$data[0]['ma_donvi']?>" placeholder="" readonly>
                </div>
                <div class="form-group">
                    <label for="">Tên đơn vị</label>
                    <input type="text" class="form-control" name="tendonvi" id="" aria-describedby="helpId"
                        value="<?=$data[0]['ten_donvi']?>" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a class="btn btn-primary" href="themhoso.php?id=<?=$_GET['id']?>" role="button"> Thêm TB/QĐ</a>
            </form>
            <form class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="15%">Số TB/QĐ</th>
                                <th width="55%">Mô tả</th>
                                <th width="15%">Ngày nhập</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($data1){foreach($data1 as $var) {?>
                            <tr>
                                <td><a href="uploads/<?=$var['ten_file']?>"><?=$var['so_tbqd']?></a>
                                </td>
                                <td><?=$var['mota'] ?></td>
                                <td><?=$var['ngay_tao'] ?></td>
                                <td> <a class="btn btn-sm btn-warning"
                                        href="suaTBQD.php?id=<?=$var['id_donvi']?>&sotbqd=<?=$var['so_tbqd']?>"
                                        role="button">
                                        <i class="fas fa-edit" aria-hidden="true"></i> Sửa</a>
                                    <a class="btn btn-sm btn-danger"
                                        href="xoa.php?id=<?=$var['id_donvi']?>&sotbqd=<?=$var['so_tbqd']?>"
                                        role="button" onclick="return confirm('Bạn có thật sự muốn xóa ?');">
                                        <i class="fas fa-trash" aria-hidden="true"></i> Xóa</a>
                                </td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php
include_once("cuoitrang.php");
?>