<?php
class Mobil {
    private $kecepatan = 0;

    private function tampilkankecepatan(){
        return "Kecepatan : " . $this->kecepatan . "km/jam";
    }

    public function tambahkecepatan($nilai) {
        $this->kecepatan += $nilai;
        echo $this->tampilkankecepatan();
    }
}

class contoh {
    private function privateMethod() {
        echo "Ini adalah private method.";
    }

    public function publicMethod() {
        //Mengakses private method dari dalam kelas 
        $this->privateMethod();
    }
}

$mobil = new mobil();
$mobil->tambahKecepatan(50); //Output : Kecepatan: 50km/jam
echo $mobil->tampilkanKecepatan(); //Akan menghasilkan error karena metode private

$contoh = new Contoh();
$contoh->publicMethod(); // ini adalah private method.

?>