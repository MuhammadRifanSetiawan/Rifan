<?php
class CatTembok {
    public $warna;
    public $jenis;

    public function Isi($warna, $jenis) {
        $this->warna = $warna;
        $this->jenis = $jenis;
    }

    public function info() {
        return "Cat warna: " . $this->warna . ", jenis: " . $this->jenis;
    }
}

$cat1 = new CatTembok();
$cat1->Isi("Merah", "Nippon Paint");

$cat2 = new CatTembok();
$cat2->Isi("Biru", "No Drop");

$cat3 = new CatTembok();
$cat3->Isi("Pink", "Deluxe");

echo $cat1->info() . "<br>";
echo $cat2->info() . "<br>";
echo $cat3->info() . "<br>";
?>
