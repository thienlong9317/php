<?php
include_once("libs/func.php");
if(!isset($_GET['id']) && !$_GET['id'])
    chuyentrang("index.php");
else
{
    if(isset($_GET['sotbqd']) && $_GET['sotbqd']) //xoa tbqd
    {
        // echo "xoa tbqd";
        // exit;
        xoa_donvi_hoso($_GET['id'], $_GET['sotbqd']);
        chuyentrang("xemchitiet.php?id=".$_GET['id']);
    }
    else //xoa donvi
    {
        xoa_donvi_hoso($_GET['id'], null);
        chuyentrang("index.php");
    }
}
?>