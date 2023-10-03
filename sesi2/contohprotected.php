<?php
class hewan {
    protected $jenis;

    protected function tampilkanJenis() {
        return "Jenis hewan: " . $this->jenis;
    }
}

class Kucing extends Hewan {
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function info(){
        echo $this->tampilkanJenis();
    }
}

$kucing = new Kucing();
$kucing->setJenis("Kucing BURADOOO");
$kucing->info();

?>
