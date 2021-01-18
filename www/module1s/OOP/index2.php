<?php
include('nhanvien.php');
include('nhanvienvp.php');
include('nhanviensx.php');
// $nv = new nhanvienvp('1','nguyen thi b', false, '12/10/2015', 3, 5, 3);
// $nv->xem();
// $nv2 = new nhanviensx('2','tran van giau', true,'12/10/2015', true, 1200);
// echo '<br>';
// $nv2->xem();
$nv = null;
if(isset($_GET) && $_GET)
{
    $manv=$_GET['manv'];
    $tennv=$_GET['tennv'];
    $nvl=$_GET['nvl'];
    $gioitinh=$_GET['gioitinh'];
    if($_GET['nv'] == 'nvvp')
    {
        $nv=$_GET['nv'];
        $hsl=$_GET['hsl'];
        $snv=$_GET['snv'];
        $sc=$_GET['sc'];
        $nv = new nhanvienvp($manv, $tennv, $gioitinh, $nvl, $sc, $hsl, $snv);
    }
    else
    {
        $nv=$_GET['nv'];
        $tc=$_GET['tc'];
        $slsp=$_GET['slsp'];
        $nv = new nhanviensx($manv, $tennv, $gioitinh, $nvl, $tc, $slsp);
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // your code here
        var nodes = document.getElementById("nvvp").getElementsByTagName('*');
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].disabled = true;
        }
        var nodes = document.getElementById("nvsx").getElementsByTagName('*');
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].disabled = true;
        }
    }, false);

    function nvvp() {
        var nodes = document.getElementById("nvvp").getElementsByTagName('*');
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].disabled = false;
        }
        var nodes = document.getElementById("nvsx").getElementsByTagName('*');
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].disabled = true;
        }
    }

    function nvsx() {
        var nodes = document.getElementById("nvvp").getElementsByTagName('*');
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].disabled = true;
        }
        var nodes = document.getElementById("nvsx").getElementsByTagName('*');
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].disabled = false;
        }
    }
    </script>
</head>

<body>
    <form action="" method="get">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xs-1-12">
                    <div class="form-group">
                        <label for="">Ma nhan vien</label>
                        <input type="text" class="form-control" name="manv" id="" aria-describedby="helpId"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Ten nhan vien</label>
                        <input type="text" class="form-control" name="tennv" id="" aria-describedby="helpId"
                            placeholder="">
                    </div>
                </div>
                <div class="col-xs-1-12 ml-3">
                    <div class="form-group">
                        <label for="">Ngay vao lam</label>
                        <input type="text" class="form-control" name="nvl" id="" aria-describedby="helpId"
                            placeholder="">
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">Gioi tinh:
                            <input class="form-check-input" type="radio" name="gioitinh" id="" value="1"> Nam</input>
                            <input class="form-check-input" type="radio" name="gioitinh" id="" value="0"> Nu</input>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-1-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="nv" id="" value="nvvp"
                                onclick="nvvp()">Nhan vien van
                            phong
                        </label>
                        <div style="border:1px solid red;" id="nvvp">
                            <div>
                                <div class="form-group m-3">
                                    <label for="">He so luong</label>
                                    <input type="text" class="form-control" name="hsl" id="" aria-describedby="helpId"
                                        placeholder="">
                                    <label for="">So ngay vang</label>
                                    <input type="text" class="form-control" name="snv" id="" aria-describedby="helpId"
                                        placeholder="">
                                    <label for="">So con</label>
                                    <input type="text" class="form-control" name="sc" id="" aria-describedby="helpId"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-xs-1-12 ml-5">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="nv" id="" value="nvsx"
                                    onclick="nvsx()">Nhan vien san
                                xuat
                            </label>
                            <div style="border:1px solid red;" id="nvsx">
                                <div class="form-group m-3">
                                    <label for="">Tang ca</label>
                                    <input type="text" class="form-control" name="tc" id="" aria-describedby="helpId"
                                        placeholder="">
                                    <label for="">So luong san pham</label>
                                    <input type="text" class="form-control" name="slsp" id="" aria-describedby="helpId"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <input name="" id="" class="btn btn-primary m-3" type="submit" value="Xem">
            </div>
        </div>
    </form>
    <?php 
        if($nv != null)
            $nv->xem();
    ?>
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