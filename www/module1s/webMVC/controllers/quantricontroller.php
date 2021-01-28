<?php
include_once('models/quantri.php');
class quantricontroller extends maincontroller
{
    private $name = "views/quantri/";
    function index()
    {
        $qt =  new quantri();
        $data = $qt->getDanhsach();
        $view = $this->name . "/danhsach.php";
        $this->render($view, ['data' => $data]);
        //include 'views/trangchu.php';
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
        include 'models/nhomquantri.php';
        $nqt = new nhomquantri();
        $lmanhom = $nqt->getDanhsach();
        if (isset($_POST) && count($_POST) > 0) {
            $qt =  new quantri();
            $ten = $_POST['name'] ?? "";
            $us = $_POST['us'] ?? "";
            $mk = $_POST['mk'] ?? "";
            $mnhom = $_POST['mnhom'] ?? "";
            $tt = $_POST['tt'] ?? "";
            $qt->themQuantri([$ten, $us, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, null]);
            if ($qt) {
                $tb = '<div class="alert alert-success">Thêm thành công</div>';
            } else {
                $tb = '<div class="alert alert-danger">Thêm không thành công</div>';
            }
        }
        $title = "THÊM QUẢN TRỊ";
        $view = $this->name . "/form.php";
        $this->render($view,  ["title" => $title, "action" => "Thêm", "manhom" => $lmanhom, "page" => 'add']);
    }
    function edit()
    {
        include 'models/nhomquantri.php';
        $nqt = new nhomquantri();
        $lmanhom = $nqt->getDanhsach();
        $qt = new quantri();
        $qt1 = $qt->getquantri($_GET['id']);
        if (isset($_POST) && count($_POST) > 0) {
            $ten = $_POST['name'] ?? $qt1[0]->name;
            $mk = $_POST['mk'] != null ? $_POST['mk'] : $qt1[0]->matkhau;
            $mnhom = $_POST['mnhom'] ?? $qt1[0]->manhom;
            $tt = $_POST['tt'] ?? $qt1[0]->trangthai;
            // var_dump($_POST);
            // exit;
            $qt->suaQuantri([$ten, $mk, $mnhom, $tt, date("Y-m-d H:m:s"), null, $qt1[0]->ma]);
            if ($qt) {
                $tb = '<div class="alert alert-success">Sửa thành công</div>';
            } else {
                $tb = '<div class="alert alert-danger">Sửa không thành công</div>';
            }
        }
        $title = "SỬA THÔNG TIN QUẢN TRỊ";
        $view = $this->name . "/form.php";
        $this->render($view, ["title" => $title, "qt1" => $qt1, "action" => "Cập nhật", "manhom" => $lmanhom, "page" => 'edit']);
    }
    function delete()
    {
        $qt = new quantri();
        $qt->xoaQuantri($_GET["id"]);
        $view = $this->name . "/danhsach.php";
        $this->render($view);
    }
    function ds()
    {
        $view = $this->name . "/danhsach.php";
        $this->render($view);
    }
}