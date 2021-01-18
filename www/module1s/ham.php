<?php
    function tong($a, $b)
    {
        return $a+$b;
    }
    //echo tong(2,3);

    //tao 1 chuoi ngau nhien cho dieu chinh tham so xuat
    function xuatchuoingaunhien($n)
    {
        if($n < 27)
        {
            $s = "";
            $i = 0;
            while($i < $n)
            {
                $c = chr(rand(97,122));
                $pos = strpos($s, $c);
                if($pos === false)
                {
                    $s = $s.$c;
                    $i = $i+1;
                }
            }
            echo $s;
        }
        else
        {
            echo "Khong the tao";
        }
    }
    //tim tat ca vi tri xuat hien cua chuoi con trong chuoi
    function timchuoi($s, $s1)
    {
        $len = strlen($s);
        $len2 = strlen($s1);
        $pos = 0;
        $str = " ";
        while($pos < $len)
        {
            $pos = strpos($s, $s1, $pos);
            if($pos === false) 
                break;
            $str .= $pos." ";
            $pos = $pos + $len2;
        }
        return $str;
    }
    // echo "ham tim chuoi: ";
    // echo timchuoi("rqkrw", "r");
    // //echo strpos("abcd", "a");
    // echo "<br/>";
    // echo "ham xuat ky tu ngau nhien: ";
    // xuatchuoingaunhien(10);
    // echo "<br/>";

    //ham xuat ra ho ten va lot
    function rutTrichTen($s, &$h, &$t, &$l)
    {
        $h = substr($s, 0, strpos($s," "));
        $t = substr($s, strrpos($s," "));
        $l = substr($s, strpos($s," "), strrpos($s," ") - strpos($s," "));
    }
    //rutTrichTen("Nguyen van daskjdhaks bhdaks hdak bdlkwhefk bsa,jfh gwalkefbv long",$ho,$ten,$lot);
    //echo "Ho: ".$ho." , Ten: ".$ten." , Lot: ".$lot;

    //test su dung con tro
    // $a = 1;
    // $b = &$a;
    // $b = 2;
    // echo "dasd".$a;

    function tinhKhoangCachGiua2Ngay($d1, $d2)
    {
        $date1 = strtotime($d1);
        $date2 = strtotime($d2);
        return ($date2-$date1)/86400;
    }

    //mac dinh thoi gian dua vao la m/d/Y
    //echo "<br/>";
    //echo tinhKhoangCachGiua2Ngay('1/1/2020','11/27/2020');

    function baoSinhNhat($d1)
    {
        $nam = date('Y', time());
        $s = '1/1/'.$nam;
        $s2 = date('m/d/', strtotime($d1));
        $s2 .= $nam;
        $d2 = tinhKhoangCachGiua2Ngay($s, date('m/d/Y', time())); 
        $d = tinhKhoangCachGiua2Ngay($s, $s2);
        return $d-$d2;
    }

    $kq = baoSinhNhat('11/1/2018');
    if($kq == 0)
        echo 'Chuc mung sinh nhat';
    else if($kq > 0)
        echo 'Con '.($kq).' ngay toi sinh nhat';
    else
        echo 'Sinh nhat da qua '.(-$kq).' ngay';
?>