<?php
include_once("libs/func.php");
if(!isset($_GET['id']) || !$_GET['id'])
    chuyentrang("index.html");
$data =  lay_thong_tin("Select * from thongtin where id_donvi='".$_GET['id']."'");
$data1 = lay_thong_tin("Select * from donvi where ma_donvi='".$_GET['id']."'");
include_once("dautrang.php");
?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Bảng thông tin cho đơn vị <?=$_GET['id']?> (<?=$data1[0]['ten_donvi'] ?>)
    </div>
    <a class="btn btn-primary" href="themhoso.php?id=<?=$_GET['id']?>" role="button"> Thêm TB/QĐ</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="15%">Số TB/QĐ</th>
                        <th width="50%">Mô tả</th>
                        <th width="15%">Ngày nhập</th>
                        <th width="20%"></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="15%">Số TB/QĐ</th>
                        <th width="50%">Mô tả</th>
                        <th width="15%">Ngày nhập</th>
                        <th width="20%"></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if($data) {?>
                    <?php foreach($data as $var) {?>
                    <tr>
                        <td><a href="uploads/<?=$var['ten_file']?>"><?=$var['so_tbqd']?></a>
                        </td>
                        <td width="500"><?=$var['mota']?></td>
                        <td><?=$var['ngay_tao']?></a>
                        </td>
                        <td> <a class="btn btn-sm btn-warning"
                                href="suaTBQD.php?id=<?=$var['id_donvi']?>&sotbqd=<?=$var['so_tbqd']?>" role="button">
                                <i class="fas fa-edit" aria-hidden="true"></i> Sửa</a>
                            <a class="btn btn-sm btn-danger"
                                href="xoa.php?id=<?=$var['id_donvi']?>&sotbqd=<?=$var['so_tbqd']?>" role="button">
                                <i class="fas fa-trash" aria-hidden="true"></i> Xóa</a>
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
?>