<?php
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
                    if(count($infouser)==4)
                    {
                        $us = trim($infouser[0]);
                        //add user vao data
                        $data[$us] = [
                            'username'=>$us,
                            'password'=>trim($infouser[1]),
                            'name'=>trim($infouser[2]),
                            'avt'=>trim($infouser[3]),
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
                $content.=$username.'|'.$user['password'].'|'.$user['name'].'|'.$user['avt']."\n";
            }
            $content = rtrim($content,"\n");
            fwrite($f,$content);
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
        // Check file type
        $fileTypes = explode($filetype, "|");
        $i = 0;
        $FileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $kq = $fileTypes[$FileType]??null;
        if($kq == null) 
            return $arr; //"Khong dung dinh dang";
        
        //check size limit
        if($file['size'] > $sizeLimit) 
            return $arr;

        //check path la directory hay file
        $isdir = is_dir($path);
        if($isdir) return $arr;
        
        //check mode : ow: cho phep overwrite, df: tao file khac (ten+time())
        $s = "";
        if($mode == "ow") //cho phep overwrite
        {
            $s = $path."/".$nameSave.".".$FileType;
            
        }
        else if($mode == "df") //tao file khac
        {
            $s = $path."/".$nameSave."_".time().".".$FileType;
        }
        echo $s;
        exit;
        
        if(move_uploaded_file($filename['tmp_name'], $s))
        {
            $arr['kq'] = true;
            $arr['path'] = $s;
        }
        else
        {
            $arr['kq'] = false;
            $arr['path'] = "";
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
?>