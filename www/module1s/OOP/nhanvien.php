<?php
abstract class nhanvien
{
    var $manhanvien;
    var $tennhanvien;
    var $gioitinh;
    var $ngayvaolam;
    
    function __construct($manhanvien, $tennhanvien, $gioitinh, $ngayvaolam)
    {
        $this->manhanvien = $manhanvien;
        $this->tennhanvien = $tennhanvien;
        $this->gioitinh = $gioitinh;
        $this->ngayvaolam = $ngayvaolam;
    }

    abstract function tinhluong();
    abstract function tinhtrocap();
    abstract function thuongphat();
    abstract function tinhluongthuclanh();

    function xem()
    {
        echo "
            ma nhan vien : $this->manhanvien <br>
            ten nhan vien : $this->tennhanvien <br>
            gioi tinh nhan vien : $this->gioitinh <br>
            ngay vao lam : $this->ngayvaolam <br>
            luong : {$this->tinhluong()} <br>
            tro cap: {$this->tinhtrocap()} <br>
            thuong phat : {$this->thuongphat()} <br>
            luong thuc lanh: {$this->tinhluongthuclanh()} <br>
        ";
    }

    
}
?>