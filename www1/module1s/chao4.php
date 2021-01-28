<?php
    $tong = 0;
    for($i = 0; $i < 10; $i++)
    {
        $tong += ($i+1);
    }
    echo 'Tổng: '.$tong.'<br/>';
    for ($i = 1, $j = 0, $k = 1; $i <= 10; $j += $i, $k *= $i, print $i.' ', $i==10?print '<br/>Tổng: '.$j.' Tích: '.$k.'<br/>':'', $i++);
    for ($i = 1, $j = 0, $k = 0; $i <= 10; $i%2==0?$j += $i:$k += $i, print $i.' ', $i==10?print '<br/>Tổng chẵn: '.$j.' Tổng lẻ: '.$k.'<br/>':'', $i++);
    $i = 1;
    $tongchan = 0;
    $tongle = 0;
    do
    {
        $i%2==0?$tongchan += $i:$tongle += $i;
        $i++;
    }
    while($i<=10);
    echo 'Tổng chẵn: '.$tongchan.' Tổng lẻ:'.$tongle.'<br/>';
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