<?php
class nhomquantri extends PDOConnect
{
    private $tenbang = 'nhomquantri';
    function getDanhsach()
    {
        return $this->getDS($this->tenbang);
    }
}