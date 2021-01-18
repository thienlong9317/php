<?php
    if(isset($_GET['thang'], $_GET['nam']))
    {
        if($_GET['thang']>= 1 && $_GET['thang'] <=12 && is_numeric($_GET['thang']))
        {
            switch ($_GET['thang'])
            {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $kq = 'Tháng '.$_GET['thang'].' có 31 ngày <br\>';
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    $kq = 'Tháng '.$_GET['thang'].' có 30 ngày <br\>';
                    break;
                case 2:
                    //$year = date('Y');
                    $is_leap_year = ((($_GET['nam'] % 4) == 0) && ((($_GET['nam'] % 100) != 0) || (($_GET['nam'] %400) == 0)));
                    $kq = 'Tháng '.$_GET['thang'].' có 28 hoặc 29 ngày. Năm '.$_GET['nam'].' có '.($is_leap_year?29:28).' ngày' ;
                    break;
            }
        }
        else
        {
            echo '<script>alert("Thông tin nhập không chính xác");</script>';
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
            <label for="">Tháng</label>
            <input type="text" name="thang" id="" value="<?php echo $_GET['thang']??'' ?>" class="form-control col-12"
                placeholder="" aria-describedby="helpId">
            <label for="">Năm</label>
            <input type="text" name="nam" id="" value="<?php echo $_GET['nam']??'' ?>" class="form-control col-12"
                placeholder="" aria-describedby="helpId">
            <label for="" style="width:100%"><?php echo $kq??'' ?></label>
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