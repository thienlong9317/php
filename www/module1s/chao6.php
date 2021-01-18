<?php
    if(isset($_GET['so1'], $_GET['so2']) 
    && is_numeric($_GET['so1']) 
    && is_numeric($_GET['so2'])
    && $_GET['so2']>$_GET['so1'])
    {
        $kq = '';
        $kq .= '<div class="row">';
        for($j = $_GET['so1']; $j<= $_GET['so2']; $j++)
        {
            $kq.= '<ul class="bcc">';
            
            for($i = 1;$i <= 10; $i++)    
            {
                $kq .= '<li>'.$i.' * '.$j.' = '.($i*$j).'</li>';
            }
            $kq.= '</ul>';
        }
        $kq .= '</div';
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
    <style>
    .bcc {
        list-style: none;
        margin: 10px;
        float: left;
        padding: 0px;
    }
    </style>
</head>

<body>
    <form class="form-inline">
        <div class="form-group col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <label for="">Bảng cửu chương</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <div class="text-center">
                            <label for="">Từ</label>
                            <input type="text" name="so1" id="" value="<?php echo $_GET['so1']??'' ?>"
                                class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <label for="">Đến</label>
                            <input type="text" name="so2" id="" value="<?php echo $_GET['so2']??'' ?>"
                                class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class='btn btn-primary m-2'>Xuất</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-left">

                        <?php echo $kq??'' ?>
                    </div>
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