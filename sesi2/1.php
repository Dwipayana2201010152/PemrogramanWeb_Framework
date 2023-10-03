<?php
class Kendaraan {
    public $nama;

    public function start() {
        echo " kendaraan dimulai.";
    }
}

$mobil = new Kendaraan();
$mobil->nama = "Mobil";
echo $mobil->nama;  //Output Mobil
$mobil->start();    //Output: Kendaraan dimulai.
?>