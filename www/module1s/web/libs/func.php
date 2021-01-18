<?php
ob_start();
session_start();
function login($username, $password, $rm = 0)
{
    //var_dump($_COOKIE);
    if(isset($_COOKIE["user"]))
    {
        //doc file
        $rs = fopen("data/user.txt","r");
        while(!feof($rs))
        {
            $s = fgets($rs);
            $mang = explode('|', $s);
            if($_COOKIE["user"] == $mang[0])
            {
                $_SESSION['user'] = array('us'=>$mang[0], "pw"=>$mang[1], "name"=>$mang[2], "avt"=>$mang[3], "status"=>$mang[4]);
                fclose($rs);
                return true;
            }
        }
        fclose($rs);
        setcookie("user", '', time()-1000, "/");
        //end
    }
    if(isset($_SESSION['user']))
    {
        return true;
    }
    else
    {
        //doc file
        $rs = fopen("data/user.txt","r");
        while(!feof($rs))
        {
            $s = fgets($rs);
            $mang = explode('|', $s);
            if($username == $mang[0] && $password == $mang[1])
            {
                $_SESSION['user'] = array('username'=>$mang[0], "password"=>$mang[1], "name"=>$mang[2], "avt"=>$mang[3]);
                if($rm)
                {
                    $cookie_name = "user";
                    $cookie_value = $mang[0];
                    $time = time() + 3600;
                    setcookie($cookie_name, $cookie_value, $time, "/"); // 86400 = 1 day
                }
                fclose($rs);
                return true;
            }
        }
        fclose($rs);
        //end
        return false;
    }   
}
function islogin()
{
    return (isset($_SESSION['user']) &&  $_SESSION['user']);
}
function readDataFile($path)
{
    $data = [];
    if(file_exists($path))
    {
        $f = fopen($path, "r");
        while(!feof($f))
        {
            $s = trim(fgets($f));
            if($s)
            {
                $infouser = explode('|',$s);
                if(count($infouser) == 5)
                {
                    $us = trim($infouser[0]);
                    //add user vao data
                    $data[$us] = [
                        'username'=>$us,
                        'password'=>trim($infouser[1]),
                        'name'=>trim($infouser[2]),
                        'avt'=>trim($infouser[3]),
                        'status'=>trim($infouser[4]),
                    ];
                }
            }    
        }
        fclose($f);
    }
    return $data;
}
function readFileProduct($path)
{
    $data = [];
    if(file_exists($path))
    {
        $f = fopen($path, "r");
        while(!feof($f))
        {
            $s = trim(fgets($f));
            if($s)
            {
                $info = explode('|',$s);
                if(count($info) == 8)
                {
                    $tt = trim($info[0]);
                    //add user vao data
                    $data[$tt] = [
                        'ma'=>$tt,
                        'ten'=>trim($info[1]),
                        'gia'=>trim($info[2]),
                        'soluong'=>trim($info[3]),
                        'hinh'=>trim($info[4]),
                        'mota'=>trim($info[5]),
                        'chitiet'=>trim($info[6]),
                        'trangthai'=>trim($info[7]),
                    ];
                }
            }    
        }
        fclose($f);
    }
    return $data;
}

function saveuser($path, $data, $mode)
{
    if($data)
    {
        $f = fopen($path, $mode);
        $content = '';
        foreach($data as $username=>$user)
        {
            $content.=$username.'|'.$user['password'].'|'.$user['name'].'|'.$user['avt']."|".$user['status']."\n";
        }
        $content = rtrim($content,"\n");
        fwrite($f, $content);
        fclose($f);
        return true;
    }
    return false;
}
function saveproduct($path, $data, $mode)
{
    if($data)
    {
        $f = fopen($path, $mode);
        $content = '';
        foreach($data as $ma=>$info)
        {
            $content.=$ma.'|'.$info['ten'].'|'.$info['gia'].'|'.$info['soluong']."|".$info['hinh']."|".$info['mota']."|".$info['chitiet']."|".$info['trangthai']."\n";
        }
        $content = rtrim($content,"\n");
        fwrite($f, $content);
        fclose($f);
        return true;
    }
    return false;
}

function uploadFile($file, $path, $nameSave, $filetype, $sizeLimit, $mode)
{
    $arr = [];
    $arr['kq'] = false;
    $arr['path'] = "";
    $arr['tb'] = "";
    // Check file type
    $fileTypes = explode($filetype, "|");
    $i = 0;
    $FileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $flag = 0;
    for($i = 0; $i < count($fileTypes); $i++)
    {
        if($FileType == $fileTypes[$i])
        {
            $flag = 1;
            break;
        }
    }
    if($flag == 1) 
    {
        $arr['tb'] = "Khong dung dinh dang";
        return $arr; //"Khong dung dinh dang";
    }
        
    //check size limit
    if($file['size'] > $sizeLimit) 
    {
        $arr['tb'] = "Kich thuoc file vuot muc";
        return $arr;
    }
        

    //check path la directory hay file
    $isdir = is_dir($path);
    if(!$isdir) 
    {
        $arr['tb'] = "Path phai la thu muc";
        return $arr;
    }
    
    //check mode : ow: cho phep overwrite, df: tao file khac (ten+time())
    $s = "";
    if($mode == "ow") //cho phep overwrite
    {
        $s = $path."/".$nameSave.".".$FileType;
        
    }
    else if($mode == "df") //tao file khac
    {
        $s = $path."/".$nameSave.".".$FileType;
        if(file_exists($s))
            $s = $path."/".$nameSave."_".time().".".$FileType;
    }
    
    if(move_uploaded_file($file['tmp_name'], $s))
    {
        $arr['kq'] = true;
        $arr['path'] = $s;
        $arr['tb'] = "Tai len thanh cong";
    }
    else
    {
        $arr['kq'] = false;
        $arr['path'] = "";
        $arr['tb'] = "Tai len that bai";
    }
    return $arr;

    // $uploads_dir = '/uploads';
    // foreach ($_FILES["pictures"]["error"] as $key => $error) 
    // {
    //     if ($error == UPLOAD_ERR_OK) {
    //         $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
    //         // basename() may prevent filesystem traversal attacks;
    //         // further validation/sanitation of the filename may be appropriate
    //         $name = basename($_FILES["pictures"]["name"][$key]);
    //         move_uploaded_file($tmp_name, "$uploads_dir/$name");
    //     }
    // }
}

function chuyentrang($path)
{
    header("location:".$path);
    exit;
}

function myupload($file,$folder,&$error,$maxsize=2,$types=['.jpg','.png','.gif'],$filename='file_')
{
    //kiểm tra tích hợp lệ của dữ liệu
    if(isset($file['tmp_name'],$file['size'],$file['error']) 
        && $file['tmp_name'] && $file['size']>0  && $file['error'] ==0)
    {
        //lam tiếp kích thước file
        $size = $maxsize * 1024*1024;
        if($file['size']<=$size)
        {
            //lam tiep loai file
            //lay duoi file
            $ext = strtolower(substr($file['name'],strrpos($file['name'],'.')));//.jpg
            //kiem tra
            if(in_array($ext,$types))
            {
                //tao duong dan file sau khi upload luu tren server
                $fullpath = $folder.'/'.$filename.time().$ext;
                //upload
                if(move_uploaded_file($file['tmp_name'],$fullpath))
                {
                    $error = 'successed';
                    return $fullpath;
                }else{
                    $error = 'failed';
                    return false;
                }
            }else{
                $error = 'Chỉ cho phép các định dạng sau: '.implode('|',$types);
                return false;
            }
        }else{
            $error = 'Kích thước tối đa: '.$maxsize.'MB';
            return false;
        }
    }else{
        $error = 'Dữ liệu không hợp lệ';
        return false;
    }
}
?>