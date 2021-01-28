<?php 
include 'core/products.php';
$list = list_product('data/products.txt');
?>
<div class="row">
                <div class="col-12">
                        <h3>Danh sách sản phẩm (<?=count($list)?>)</h3>
                        <table class="table table-striped table-inverse ">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Mã</th>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Trạng thái</th>
                                    <th class="text-right">Tác vụ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach($list as $item)
                                {
                                ?>
                                    <tr>
                                        <td><?=$item['id']?></td>
                                        <td scope="row"><img src="<?=$item['img']?$item['img']:'images/no-image.png'?>" width="50" /></td>
                                        <td><?=$item['name']?></td>
                                        <td><?=$item['price']?></td>
                                        <td>                                        
                                            <?=$item['status']==1?'<span class="badge badge-success">Hiển thị</span>':'<span class="badge badge-dark">Ẩn</span>'?>                                        
                                        </td>
                                        <td  class="text-right">
                                        <a  class="btn btn-sm btn-primary" href="suasp.php?user=<?=$item['id']?>" role="button">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</a>
                                        <a  class="btn btn-sm btn-danger" href="xoasp.php?user=<?=$item['id']?>" role="button">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xoá</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                </div>
            </div>