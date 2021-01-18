<?php
    // echo is_numeric($_GET['hk1'])? "a": "b";
    
    if(isset($_GET['hk1'], $_GET['hk2']))
    {
        if ($_GET['hk1']>=0 && $_GET['hk1']<=10
        && $_GET['hk2']>=0 && $_GET['hk2']<=10
        && is_numeric($_GET['hk1'])
        && is_numeric($_GET['hk2'])) 
        {
            $dtb = ($_GET['hk1'] + $_GET['hk2']*2)/3;
            if($dtb<=4)
            {
                $kq = "Yếu";
                $xl = "Học lại";
            }
            else if($dtb<=6.4)
            {
                $kq = "Trung bình";
                $xl = "Lên lớp";
            }else if($dtb<=7.9)
            {
                $kq = "Khá";
                $xl = "Lên lớp";
            }else
            {
                $kq = "Giỏi";
                $xl = "Lên lớp";
            }
        }
        else
        {
            echo '<script>alert("Thong tin nhap khong dung");</script>';
        }
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

    <form class="form-inline">
        <div class="form-group container">
            <label for="">HK1</label>
            <input type="text" name="hk1" id="" value="<?php echo $_GET['hk1']??'' ?>" class="form-control col-12"
                placeholder="" aria-describedby="helpId">
            <label for="">HK2</label>
            <input type="text" name="hk2" id="" value="<?php echo $_GET['hk2']??'' ?>" class="form-control col-12"
                placeholder="" aria-describedby="helpId">
            <label for="">DTB</label>
            <input type="text" name="" readonly id="" value="<?php echo $dtb??''

                ?>" class="form-control col-12" placeholder="" aria-describedby="helpId">
            <label for="">Kết quả</label>
            <input type="text" name="" readonly id="" value="<?php 
                echo $kq??''
            ?>" class="form-control col-12" placeholder="" aria-describedby="helpId">
            <label for="">Xếp loại</label>
            <input type="text" name="" readonly id="" value="<?php 
                echo $xl??''
            ?>" class="form-control col-12" placeholder="" aria-describedby="helpId">
            <button class="btn btn-primary m-2">Xem</button>
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