<?php 
class sinhvien
{
    //khai báo thành viên: ma,ten,lop,diem;
    var $ma;
    var $ten;
    var $lop;
    var $diem;
    // xay dung cac phương thức xu ly
    //phuong thức khởi tạo obj
    //kieu 1 : tao 1 phuong thuc ten trung vs ten class: chi ap dung cho php <=5
    // function sinhvien($ma,$ten,$lop,$diem)
    // {
    //     //day qua cho thanh vien
    //     $this->ma = $ma;
    //     $this->ten = $ten;
    //     $this->lop = $lop;
    //     $this->diem = $diem;        
    // }
    // kieu 2: tao 1 phuong thuc hoan toan khac tuy bạn 
    // function khoitao($ma,$ten,$lop,$diem)
    // {
    //     //day qua cho thanh vien
    //     $this->ma = $ma;
    //     $this->ten = $ten;
    //     $this->lop = $lop;
    //     $this->diem = $diem;        
    // }
    // kieu 3: dung ten phuong thuc của php dinh nghia 
    function __construct($ma,$ten,$lop,$diem)
    {
        //day qua cho thanh vien
        $this->ma = $ma;
        $this->ten = $ten;
        $this->lop = $lop;
        $this->diem = $diem;        
    }
    function xem()
    {
        echo  'ten: '.$this->ten.'<br>';
        echo  'ma: '.$this->ma.'<br>';
        echo  'lop: '.$this->lop.'<br>';
        echo  'diem: '.$this->diem.'<br>';
    }
}