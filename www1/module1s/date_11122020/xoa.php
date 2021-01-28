<?php
include_once("libs/func.php");

$mang = readFileProduct("data/products.txt");

//kiem tra xem dang nhap chua
// if(!isset($_SESSION['user']))
// {
//     chuyentrang("login.php");
// }
// else
// {
//     $user = $_SESSION['user'];
// }
if(isset($_GET["id"]) && $_GET["id"])
{
    unset($mang[$_GET["id"]]);
    saveproduct("data/products.txt", $mang, "w+");
    chuyentrang("danhsach.php");
}

?>