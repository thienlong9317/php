<?php 
include 'nhanvien.php';
include 'nhanvienvanphong.php';
include 'nhanviensanxuat.php';
//$nva = new nhanvien('001','nguyen thi a',0,'01/01/2020');
$nv = new nhanvienvanphong('001','nguyen thi a',0,'01/01/2020',5,2.2,3);
$nv2 = new nhanviensanxuat('001','nguyen thi a',0,'01/01/2020',800,1);
$nv2->xem();
?>