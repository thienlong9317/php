<?php
class nhanviensx extends nhanvien
{
    var $manhanvien;
    var $tennhanvien;
    var $gioitinh;
    var $tangca;
    var $soluongsp;
    var $dongia;
    private $dinhmucsp;
    var $luong;
    var $trocap;
    var $thuong;
    
    function __construct($manhanvien, $tennhanvien, $gioitinh, $ngayvaolam, $tangca, $soluongsp)
    {
        parent ::__construct($manhanvien, $tennhanvien, $gioitinh, $ngayvaolam);
        $this->tangca = $tangca;
        $this->soluongsp = $soluongsp;
        $this->dongia = 12000;
        $this->dinhmucsp = 1000;   
    }
    function tinhluong()
    {
        return $this->luong = $this->soluongsp * $this->dongia;;
    }

    function tinhtrocap()
    {
        return $this->tangca == true ? 0.05*$this->tinhluong():0;
    }

    function thuongphat()
    {
        return ($this->soluongsp - $this->dinhmucsp)*10000;
    }

    function tinhluongthuclanh()
    {
        return $this->tinhluong() + $this->thuongphat() + $this->tinhtrocap();
    }

    function xem()
    {
        echo "
            ma nhan vien : $this->manhanvien <br>
            ten nhan vien : $this->tennhanvien <br>
            gioi tinh nhan vien : $this->gioitinh <br>
            ngay vao lam : $this->ngayvaolam <br>
            tang ca : $this->tangca <br>
            so san pham : $this->soluongsp <br>
            luong : {$this->tinhluong()} <br>
            tro cap: {$this->tinhtrocap()} <br>
            thuong phat : {$this->thuongphat()} <br>
            luong thuc lanh: {$this->tinhluongthuclanh()} <br>
        ";
    }
}
?>