<?php
class NCCcontroller extends maincontroller
{
    var $name = 'views/NCC/';
    function index()
    {
        include_once('models/nhacungcap.php');
        $qt =  new nhacungcap();
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
        $tb = "";
        include 'models/nhacungcap.php';
        $ncc = new NhaCungCap();
        if (isset($_POST) && count($_POST) > 0) {
            $ten = $_POST['ten'];
            $tt = $_POST['tt'];
            $ncc->themNCC([$ten, $tt, date("Y-m-d H:m:s")]);
            //$qt->suaQuantri([$ten, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, $qt1[0]->ma]);
            if ($ncc) {
                $tb = '<div class="alert alert-success">Thêm thành công</div>';
            } else {
                $tb = '<div class="alert alert-danger">Thêm không thành công</div>';
            }
        }
        $title = "THÊM NHÀ CUNG CẤP";
        $view = $this->name . "/form.php";
        $this->render($view, ["title" => $title, "action" => "Thêm", "page" => 'add', "tb" => $tb]);
    }
    function edit()
    {
        $tb = "";
        include 'models/nhacungcap.php';
        $ncc = new NhaCungCap();
        $ttncc = $ncc->getNCC($_GET['id']);
        if (isset($_POST) && count($_POST) > 0) {
            $ma = $_POST['ma'];
            $ten = $_POST['ten'] != null ? $_POST['ten'] : $ttncc[0]->ten;
            $tt = $_POST['tt'] != null ? $_POST['tt'] : $ttncc[0]->tt;
            $ncc->suaNCC([$ten, $tt, date("Y-m-d H:m:s"), $ma]);
            //$qt->suaQuantri([$ten, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, $qt1[0]->ma]);
            if ($kh) {
                $tb = '<div class="alert alert-success">Cập nhật thành công</div>';
            } else {
                $tb = '<div class="alert alert-danger">Cập nhật không thành công</div>';
            }
        }
        $title = "SỬA THÔNG TIN NHÀ CUNG CẤP";
        $view = $this->name . "/form.php";
        $this->render($view, ["title" => $title, "action" => "Cập nhật", "page" => 'edit', "ncc" => $ttncc, "tb" => $tb]);
    }
    function delete()
    {
        //include 'views/sanpham/xoasanpham.php';
    }
}