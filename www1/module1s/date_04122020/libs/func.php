<?php
    session_start();
    function islogin()
    {
        return isset($_SESSION['user']) &&  $_SESSION['user'];
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
?>