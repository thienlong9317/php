<?php 
class nhanvienvanphong extends nhanvien
{
    var $socon,$hsl,$songayvang;
    var $dinhmuc = 3;
    var $lcb = 3500000;
    //khoi tao 
    function __construct($ma,$ten,$gioitinh,$ngayvaolam,$socon,$hsl,$songayvang)
    {
        parent::__construct($ma,$ten,$gioitinh,$ngayvaolam);
        $this->socon = $socon;
        $this->hsl = $hsl;
        $this->songayvang = $songayvang;
    }
    function luong()
    {
        return $this->hsl * $this->lcb;
    }
    function trocap()
    {
        return ($this->gioitinh==0 && $this->socon >2 )?($this->socon-2) * 100000:0;
    }
    function thuongphat()
    {
        return $this->songayvang>$this->dinhmuc?($this->songayvang-$this->dinhmuc)*-100000:0;
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
        Ngày vào làm: $this->ngayvaolam <br>
        Số con: $this->socon <br>
        Số ngày vắng: $this->songayvang <br>
        Định mức: $this->dinhmuc <br>
        HSL: $this->hsl <br>
        LCB: $this->lcb <br>
        Lương: {$this->luong()} <br>
        Trợ cấp: {$this->trocap()} <br>
        Thưởng phạt: {$this->thuongphat()} <br>
        Thực lãnh: {$this->thuclanh()} <br>
        ";
    }
}