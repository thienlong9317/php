<?php
class nhanvienvp extends nhanvien
{
    var $manhanvien;
    var $tennhanvien;
    var $gioitinh;
    var $ngayvaolam;
    var $socon;
    var $hesoluong;
    var $songayvang;
    private $dinhmucvang = 3;
    private $luongcanban = 3500000;  
    
    function __construct($manhanvien, $tennhanvien, $gioitinh, $ngayvaolam, $socon, $hesoluong, $songayvang)
    {
        parent ::__construct($manhanvien, $tennhanvien, $gioitinh, $ngayvaolam);
        $this->songayvang = $songayvang;
        $this->socon = $socon;
        $this->hesoluong = $hesoluong;
    }

    function tinhluong()
    {
        return  $this->luong = $this->hesoluong*$this->luongcanban;
    }
    function tinhtrocap()
    {
        if($this->gioitinh == false) //nu moi co tro cap so con 
            $this->trocap = ($this->socon-2)>0?($this->socon-2)*100000:0;
        else
            $this->trocap = 0;
        return $this->trocap;
    }

    function thuongphat()
    {
        return ($this->songayvang > $this->dinhmucvang)?($this->songayvang - ($this->dinhmucvang))*100000:0;
    }

    function tinhluongthuclanh()
    {
        return $this->tinhluong() - $this->thuongphat() + $this->tinhtrocap();
    }

    function xem()
    {
        echo "
            ma nhan vien : $this->manhanvien <br>
            ten nhan vien : $this->tennhanvien <br>
            gioi tinh nhan vien : $this->gioitinh <br>
            ngay vao lam : $this->ngayvaolam <br> 
            so con : $this->socon <br> 
            he so luong : $this->hesoluong <br> 
            so ngay vang : $this->songayvang <br>   
            luong : {$this->tinhluong()} <br>
            tro cap: {$this->tinhtrocap()} <br>
            thuong phat : {$this->thuongphat()} <br>
            luong thuc lanh: {$this->tinhluongthuclanh()} <br>
        ";
    }
}
?>