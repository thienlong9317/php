<?php
include 'sinhvien.php';
include 'pheptinh.php';
include 'phanso.php';
// new: tao moi 1 obj
// $sv1 = new sinhvien('a','a','a','a');
// //$sv1->khoitao('a','a','a','a');
// //day du lieu vao cho sv
// echo '<pre>',print_r($sv1),'</pre>';
// /// cach truy xuat cac thanh phan trong obj: ->
// //echo $sv1->ten;
// $sv1->xem();

// $mang = [
//     'ma' => '',
//     'ten' => '',
//     'lop' => '',
//     'diem' =>'',
// ];
// echo '<pre>',print_r($mang),'</pre>';
// $pt = new pheptinh(1,2);
// echo $pt->cong();
// $pt->xem();
$ps1 = new phanso(1,2);
$ps2 = new phanso(2,3);
$ps1->xem();
echo '+';
$ps2->xem();
echo '=';
$ps1->cong($ps2)->xem()->cong(new phanso(2,5))->xem();