<?php 
/*
Xem cau truc cua 1 cai mang: 
    var_dump(mang);
    print_r(mang);
Tao mang: 
    $mang = [key=>value,key=>value,...];
    $mang = array(key=>value,key=>value,...);
    $chuoi = implode('kytu',mang); => noi cac phan tu thanh 1 cai chuoi
    $mang = explode('ky tu',chuoi)
Truy xuat phan tu: $mang[key];
Duyet mang: foreach(mang as key=>value)
                {
                    xuly
                }

*/
$mang = [123,12,3,[123,12,3,[123,12,3,[[123,12,3,123,12,31,23,12,3],12,3,123,12,31,23,12,3],12,31,23,12,3],12,31,23,12,3],12,31,23,12,3];
$str = 'chao cac ban';
$mang2= explode(' ',$str);
//echo $mang;
//var_dump($mang);
//echo '<pre>',print_r($mang),'</pre>';
//echo $mang[3][3][3][0][1];
//echo '<pre>',print_r($mang2),'</pre>';
//echo '<pre>',print_r($mang),'</pre>';
//echo count($mang2);
//is_array($mang);

// foreach($mang2 as $key=>$value)
// {
//     echo $key.'=>'.$value.'<br>';
// }

function duyetMang($key, $value)
{
    if(is_array($value) == FALSE)
        echo $key.'=>'.$value.'<br>';
    else
    {
        foreach($value as $k=>$v)
            duyetMang($k, $v);
    }
}

// foreach($mang as $key=>$value)
// {
//     duyetMang($key, $value);
// }
duyetMang(null, $mang);
?>