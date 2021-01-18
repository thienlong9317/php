<?php
try{
    $tb = "";
    if(isset($_POST["username"],$_POST["password"]))
    {
        //b1+2: mo ket noi sql: PDO va chon db
        $cn = new PDO('mysql:host=localhost;port=3306;dbname=qlybanhang','root','');
        //chuyen bang ma sql ve utf tren web
        $cn->query('set names utf8');
        //var_dump($cn);   
        //b3: tao cau truy van can thuc thi
        $sql =  'select * from quantri where tendangnhap = :username and matkhau = :pass ';
        //b3.1: gui lenh sql xuong cho mysql thuc thi
        // pt thuc thi cau truy van chon: query(sql) - >resource (obj) , => false
        // pt thuc thi cau truy cap nhat: exec(sql) -> so dong tac dong => false
        $sth = $cn->prepare($sql);
        $sth->bindParam(':username', $_POST["username"], PDO::PARAM_STR);
        $sth->bindParam(':pass', $_POST["password"], PDO::PARAM_STR);
        $sth->execute();
        //du lieu can
        $data = $sth->fetch();
        //xu ly giao dien
        //echo '<pre>',print_r($data),'</pre>';
        if($data != null)
        {
            $tb = '<div class="alert alert-success">Đăng nhập thành công</div>';
            header("location:danhsach.php");
            exit;
        }
        else
        {
            $tb = '<div class="alert alert-danger">Đăng nhập không thành công</div>';
        }
        // foreach($data as $item)
        // {
        //     echo $item->ten.':'.$item->gia.'<br>';
        // }
        //b5: dong ket noi
        $cn = null;
        $sth = null;
    }
        //chuyen doi du lieu tu sql qua php
}catch(PDOException $e)
{
    exit($e->getMessage());
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php echo $tb; ?>
    <form method="POST">
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-2">
                    <h3>ĐĂNG NHẬP</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="username *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password *"
                                value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Đăng nhập" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd" value="Login">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>