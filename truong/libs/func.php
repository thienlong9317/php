<?php
session_start();
function getketnoi()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testuni";
    $port = "3306";
    
    // tạo connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    // kiểm connection
    if ($conn->connect_error) 
    {
        return null;
        //die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}
function getketnoi2()
{
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testuni";
    $port = "3306";
	$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
	mysqli_set_charset($conn, 'UTF8');
	if(! $conn ) {
		die('Could not connect: ' . mysql_error());
	}

	//echo 'Connected successfully';
	return $conn;
}
function lay_thong_tin($sql)
{
    $mang = [];
    
    $conn = getketnoi2();
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
    if($conn == null)
    {
        return null;
    }
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output dữ liệu trên trang
        while($row = $result->fetch_assoc()) 
        {
            $mang[] = $row;
			
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]." ". $row["lastname"]. "<br>";
        }
    } 
    else 
    {
        $conn->close();
        return null;
    }
    $conn->close();
    return $mang;
}

function chuyentrang($path)
{
    header("location:".$path);
    exit;
}

function uploadFile($file, $path, $nameSave, $filetype, $sizeLimit, $mode)
{
    $arr = [];
    $arr['kq'] = false;
    $arr['path'] = "";
    $arr['tb'] = "";
    $arr['tf'] = "";
    $tenfile = "";
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
        $tenfile = $nameSave.".".$FileType;
        
    }
    else if($mode == "df") //tao file khac
    {
        $s = $path."/".$nameSave.".".$FileType;
        $tenfile = $nameSave.".".$FileType;
        if(file_exists($s))
        {
            $tenfile = $nameSave."_".time().".".$FileType;
            $s = $path."/".$tenfile;
        }
    }
    if(move_uploaded_file($file['tmp_name'], $s))
    {
        $arr['kq'] = true;
        $arr['path'] = $s;
        $arr['tb'] = "Tai len thanh cong";
        $arr['tf'] = $tenfile;
    }
    else
    {
        $arr['kq'] = false;
        $arr['path'] = "";
        $arr['tb'] = "Tai len that bai";
        $arr['tf'] = "";
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

function savehoso($id, $sotbqd, $mota, $tenfile)
{
    $conn = getketnoi();
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
    if($conn == null)
    {
        return null;
    }
    
    $sql = "INSERT INTO thongtin (id_donvi, sotbqd, ten_file, ngay_tao, mota) VALUES ('John', 'Doe', 'john@example.com')";
    $stmt = $conn->prepare("INSERT INTO thongtin (id_donvi, so_tbqd, ten_file, ngay_tao, mota) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $iddv, $tbqd, $tf, $ngaytao, $mt);
    $iddv = $id;
    $tbqd = $sotbqd;
    $tf = $tenfile;
    $ngaytao = date('Y-m-d h:m:s');
    $mt = $mota;

    return $stmt->execute();
}

function updatehoso($id, $sotbqdm, $mota, $tenfile, $sotbqdc)
{
    $conn = getketnoi();
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
    if($conn == null)
    {
        return null;
    }
    
    //update   
    $stmt = $conn->prepare("UPDATE thongtin SET so_tbqd = ?, ten_file=?, ngay_tao=?, mota=? WHERE id_donvi = ? and so_tbqd = ?");
    $stmt->bind_param("ssssss", $tbqd, $tf, $ngaytao, $mt, $iddv, $sotbqd2);
    $tbqd = $sotbqdm;
    $tf = $tenfile;
    $ngaytao = date('Y-m-d h:m:s');
    $mt = $mota;
    $iddv = $id;
    $sotbqd2 = $sotbqdc;
    return $stmt->execute();
}

function saveDonvi($ma, $ten)
{
    $conn = getketnoi();
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
    if($conn == null)
    {
        return null;
    }
    
    $sql = "INSERT INTO donvi (ma_donvi, ten_donvi) VALUES (:ma,:ten)";
    $stmt = $conn->prepare("INSERT INTO donvi (ma_donvi, ten_donvi) VALUES (?,?)");
    $stmt->bind_param("ss", $madv, $tendv);
    $madv = $ma;
    $tendv = $ten;
    return $stmt->execute();
}

function xoa_donvi_hoso($iddv, $sotb)
{
    $conn = getketnoi();
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
    if($conn == null)
    {
        return null;
    }

    if($sotb == null) //xoa don vi
    {
        $stmt = $conn->prepare("DELETE FROM donvi WHERE ma_donvi = ?");
        $stmt->bind_param("s", $madv);
        $madv = $iddv;
    }
    else //xoa tbqd cua don vi
    {
        $stmt = $conn->prepare("DELETE FROM thongtin WHERE id_donvi=? and so_tbqd=?");
        $stmt->bind_param("ss", $madv, $sotbqd);
        $madv = $iddv;
        $sotbqd = $sotb;
    }
    return $stmt->execute();
}

function updateDonvi($iddv, $ten_dv)
{
    $conn = getketnoi();
    if($conn == null)
    {
        return null;
    }
    $stmt = $conn->prepare("UPDATE donvi SET ten_donvi = ? WHERE ma_donvi = ?");
    $stmt->bind_param("ss",$tendv, $madv);
    $tendv = $ten_dv;
    $madv = $iddv;
    return $stmt->execute();
}

function extractFileName($str)
{
    return substr($str, 0, strrpos($str, "."));
}
?>