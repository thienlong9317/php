<?php
include 'controllers/maincontroller.php';
include 'libs/func.php';
include_once "models/PDOConnect.php";
$controllername = ($_GET['ctrl'] ?? 'hethong') . 'controller';
$path = 'controllers/' . $controllername . '.php';
if (file_exists($path)) {
    include $path;
} else
    include 'controllers/hethongcontroller.php';
$controller = new $controllername();
if (islogin())
    $action = $_GET['act'] ?? 'index';
else
    $action = 'toLogin';
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    $controller->_404();
}