<?php 
class nhanviensanxuat extends nhanvien
{
    var $soluong,$tangca;
    var $dinhmuc = 1000;
    var $dongia = 12000;
    //khoi tao 
    function __construct($ma,$ten,$gioitinh,$ngayvaolam,$soluong,$tangca)
    {
       parent::__construct($ma,$ten,$gioitinh,$ngayvaolam);
        $this->soluong = $soluong;
        $this->tangca = $tangca;
    }
    function luong()
    {
        return $this->dongia * $this->soluong;
    }
    function trocap()
    {
        return ($this->tangca)?$this->luong() * 0.05:0;
    }
    function thuongphat()
    {
        return ($this->soluong-$this->dinhmuc)*10000;
    }
    function thuclanh()
    {
        return $this->luong() + $this->trocap()+ $this->thuongphat();
    }
    function xem()
    {
        echo "
        Mã: $this->ma <br>
        Tên: $this->ten <br>
        Giới tính: $this->gioitinh <br>
        Số lượng: $this->soluong <br>
        Định mức: $this->dinhmuc <br>
        Đơn giá: $this->dongia <br>
        Tăng ca: $this->tangca <br>
        Lương: {$this->luong()} <br>
        Trợ cấp: {$this->trocap()} <br>
        Thưởng phạt: {$this->thuongphat()} <br>
        Thực lãnh: {$this->thuclanh()} <br>
        ";
    }
}