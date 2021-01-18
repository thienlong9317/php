<?php 
abstract class nhanvien
{
    var $ma,$ten,$gioitinh,$ngayvaolam;
    //khoi tao 
    function __construct($ma,$ten,$gioitinh,$ngayvaolam)
    {
        $this->ma = $ma;
        $this->ten = $ten;
        $this->gioitinh = $gioitinh;// 1: nam,0 nu
        $this->ngayvaolam = $ngayvaolam;
    }
    abstract function luong();
    function trocap()
    {
       
    }
    function thuongphat()
    {
      
    }
    function thuclanh()
    {
        
    }
    function xem()
    {
        echo "
        Mã: $this->ma <br>
        Tên: $this->ten <br>
        Giới tính: $this->gioitinh <br>
        Ngày vào làm: $this->ngayvaolam <br>
        Lương: {$this->luong()} <br>
        Trợ cấp: {$this->trocap()} <br>
        Thưởng phạt: {$this->thuongphat()} <br>
        Thực lãnh: {$this->thuclanh()} <br>
        ";
    }
}