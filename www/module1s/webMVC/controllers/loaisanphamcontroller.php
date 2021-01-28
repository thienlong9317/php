<?php
class loaisanphamcontroller extends maincontroller
{
    var $name = 'views/loaisanpham/';
    function index()
    {
        include_once('models/loaisanpham.php');
        $qt =  new loaisanpham();
        $data = $qt->getDanhsach();
        $view = $this->name . 'danhsach.php';
        $this->render($view, ['data' => $data]);
    }
    function form()
    {
        if (isset($_GET['page']) && $_GET['page'] == 'edit') {
            $this->edit();
        } else {
            $this->add();
        }
    }
    function add()
    {
        $view = $this->name . 'them.php';
        $this->render($view);
    }
    function edit()
    {
        $tb = "";
        include 'models/loaisanpham.php';
        $lsp = new loaisanpham();
        $ttlsp = $lsp->getLSP($_GET['id']);
        if (isset($_POST) && count($_POST) > 0) {
            $ma = $_POST['ma'];
            $ten = $_POST['ten'] != null ? $_POST['ten'] : $ttkh[0]->ten;
            $kh->suaKH([$ten, $ma]);
            //$qt->suaQuantri([$ten, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, $qt1[0]->ma]);
            if ($kh) {
                $tb = '<div class="alert alert-success">Cập nhật thành công</div>';
            } else {
                $tb = '<div class="alert alert-danger">Cập nhật không thành công</div>';
            }
        }
        $title = "SỬA THÔNG TIN LOẠI SẢN PHẨM";
        $view = $this->name . "/form.php";
        $this->render($view, ["title" => $title, "action" => "Cập nhật", "page" => 'edit', "kh" => $ttkh, "tb" => $tb]);

        // $view = $this->link . 'sua.php';

        // $this->render($view);
    }
    function delete()
    {
        //include 'views/sanpham/xoasanpham.php';
    }
}