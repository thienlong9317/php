<div class="row">
    <div class="col-md-12">
            <h3>Danh sách người dùng</h3>
            <table class="table table-striped table-inverse ">
                <thead class="thead-inverse">
                    <tr>
                        <th>Hình</th>
                        <th>Tài khoản</th>
                        <th>Tên</th>
                        <th>Trạng thái</th>
                        <th class="text-right">Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($list as $user)
                    {
                    ?>
                        <tr>
                            <td scope="row"><img src="<?=$user->avt?$user->avt:'public/images/no-image.png'?>" width="50" /></td>
                            <td><?=$user->tendangnhap?></td>
                            <td><?=$user->ten?></td>
                            <td>                                        
                                <?=$user->trangthai==1?'<span class="badge badge-success">Kích hoạt</span>':'<span class="badge badge-dark">Khoá</span>'?>                                        
                            </td>
                            <td  class="text-right">
                            <a  class="btn btn-sm btn-primary" href="<?=href('nguoidung','edit',['id'=>$user->ma])?>" role="button">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</a>
                            <a onclick="return confirm('bạn có muốn xóa không?')" class="btn btn-sm btn-danger"
                             href="<?=href('nguoidung','delete',['id'=>$user->ma])?>" role="button">
                            <i class="fa fa-trash" aria-hidden="true"></i> Xoá</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
            </table>
    </div>
</div>