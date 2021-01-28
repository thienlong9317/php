<?php 
function xemmang($ar)
{
  echo '<pre>',print_r($ar),'</pre>';
}
function them($ma,$ten,$gia,$soluong,&$mang)
{
  if(!isset($mang[$ma])){
    $mang[$ma] = array('ten' => $ten, 'don_gia' => $gia, 	'so_luong' =>$soluong, 'thanh_tien' => $gia*$soluong);
  }
  else {
    echo 'Ma da co';
  }
  // xemmang($mang);
}
function sua($ma,$soluong,&$mang)
{
  if(isset($mang[$ma])){
    $mang[$ma]['so_luong'] = $soluong;
    $mang[$ma]['thanh_tien'] = $soluong * $mang[$ma]['don_gia'];
  }
  else {
    echo 'Ma chua co';
  }
}
function xoa($ma,&$mang)
{
  if(isset($mang[$ma])){
    unset($mang[$ma]);
  }
  else {
    echo 'Ma chua co';
  }
}
?>