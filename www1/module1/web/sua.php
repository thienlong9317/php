<?php 
include 'libs/funcs.php';
//kiem tra da login chua
if(!islogin())
    chuyentrang('login.php');
if(!isset($_GET['user']) || !$_GET['user'])
    chuyentrang('danhsach.php');
    include 'core/users.php';
$list = list_user('data/users.txt');
$user = $list[$_GET['user']];
if(!$user)
    chuyentrang('danhsach.php');
if(isset($_POST['username']))
{
   // xemmang($_FILES['avatar']);
    $user['name'] = $_POST['name'];
    if($_POST['password'])
        $user['password'] = $_POST['password'];
    $user['status'] = $_POST['status'];    
    $avt = myupload($_FILES['avatar'],'images',$msg);
    if($avt)
        $user['avt'] = $avt;
    $list[$_POST['username']] = $user;
    save('data/users.txt',$list);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">

  </head>
  <body>
  <?php include 'widgets/menu.php';?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h3>Cập nhật <?=$user['username']?></h3>
                        <form method="post" class="container" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-12 m-auto">
                        <?=$thongbao??''?>
                        <div class="form-group">
                            <label for="">Avatar</label>
                            <img src="<?=$user['avt']?$user['avt']:'images/no-image.png'?>" width="50" />
                            <input type="file"  name="avatar" id="avatar" class="form-control" placeholder="" aria-describedby="helpId">            
                            <span class="text-danger"><?=$msg??''?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" value="<?=$user['name']?>" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">            
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" value="<?=$user['username']?>" readonly name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">            
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">            
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control" >  
                                <option <?=$user['status']==1?'selected':'' ?> value="1">Active</option>
                                <option <?=$user['status']==2?'selected':'' ?> value="2">Deactive</option>
                            </select>          
                        </div>
                        <div class="form-group text-right">
                        <input type="submit" class="btn btn-sm btn-success" value="Save">   
                        <a href="danhsach.php" class="btn btn-sm btn-danger">Cancel</a>          
                                  
                        </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>