<?php
include 'controllers/maincontroller.php';
$controllername = ($_GET['ctrl'] ?? 'hethong') . 'controller';
$path = 'controllers/' . $controllername . '.php';
if (file_exists($path)) {
    include $path;
} else
    include 'controllers/hethongcontroller.php';
$controller = new $controllername();
$action = $_GET['act'] ?? 'index';
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    $controller->_404();
}