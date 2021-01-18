
<?php 
function list_product($path)
{
    $data = [];
    //$f = fopen($path,'r') or die('Data error');
    if(file_exists($path))
    {
        $f = fopen($path,'r');
        while(!feof($f))
        {
            $s = trim(fgets($f));
            if($s)
            {
                $info = explode('|',$s);
                if(count($info)==8)
                {
                    $id = trim($info[1]);
                    //add user vao data
                    $data[$id] = [
                        'id'=>$id,
                        'img'=>trim($info[0]),
                        'name'=>trim($info[2]),
                        'price'=>trim($info[3]),
                        'status'=>trim($info[5]),
                        'qty'=>trim($info[4]),
                        'desc'=>trim($info[6]),
                        'content'=>trim($info[7]),
                    ];
                }
            }    
        }
        fclose($f);
    }
    return $data;
}
function save($path,$data)
{   
    if($data)
    {
        $f = fopen($path,'w+');
        //tao chuoi noi dung can ghi tu cai data
        $content = '';
        foreach($data as $id=>$item)
        {
            $content.=$item['img'].'|'.$id.'|'.$item['name'].'|'.$item['price'].'|'.$item['qty'].'|'.$item['status'].'|'.$item['desc'].'|'.$item['content']."\n";
        }
        $content = rtrim($content,"\n");
        fwrite($f,$content);
        fclose($f);
        return true;
    }
    return false;
}
