<?php

include "index.php";

class buah
{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<br>harga mangga : ".$this->totalMangga;
    }

    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br>harga jambu : ".$this->totalJambu;
    }

    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br>harga salak : ".$this->totalSalak;
    }

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<br>total belanjaan = ". $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
?>