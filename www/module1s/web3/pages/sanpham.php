<?php 
$data = readFileProduct("data/products.txt");
?>

<div class="row">
    <div class="col-12 auto">
        <h3 class='text-center'>Danh sách sản phẩm</h3>
        <table class="table table-inverse table-bordered">
            <thead class="thead-inverse">
                <tr>
                    <th class='text-center'>Mã</th>
                    <th class='text-center'>Tên</th>
                    <th class='text-center'>Giá</th>
                    <th class='text-center'>Hình</th>
                    <th class='text-center'></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $item){
                            if($item['trangthai'] == 1 ){?>
                <tr>
                    <td class='text-center'><?=$item['ma']?></td>
                    <td class='text-center'><?=$item['ten']?></td>
                    <td class='text-center'><?=$item['gia']?></td>
                    <td class='text-center'><img width="50"
                            src="<?=$item['hinh']?$item['hinh']:" images/no_image.png"?>"></td>
                    <td class='text-center'> <a class="btn btn-sm btn-primary" href="xemchitiet.php?id=<?=$item['ma']?>"
                            type="button">
                            Xem
                        </a>
                        <a class="btn btn-sm btn-danger" href="xoa.php?id=<?=$item['ma']?>" type="button">
                            Xóa
                        </a>
                        <a class="btn btn-sm btn-warning" href="sua.php?id=<?=$item['ma']?>" type="button">
                            Sửa
                        </a>
                    </td>
                </tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>