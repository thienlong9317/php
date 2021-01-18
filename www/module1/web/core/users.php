
<?php 
function list_user($path)
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
                $infouser = explode('|',$s);
                if(count($infouser)==5)
                {
                    $us = trim($infouser[1]);
                    //add user vao data
                    $data[$us] = [
                        'username'=>$us,
                        'password'=>trim($infouser[2]),
                        'name'=>trim($infouser[3]),
                        'avt'=>trim($infouser[0]),
                        'status'=>trim($infouser[4]),
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
        foreach($data as $username=>$user)
        {
            $content.=$user['avt'].'|'.$username.'|'.$user['password'].'|'.$user['name'].'|'.$user['status']."\n";
        }
        $content = rtrim($content,"\n");
        fwrite($f,$content);
        fclose($f);
        return true;
    }
    return false;
}
