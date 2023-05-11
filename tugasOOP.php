<p>Visibility Laptop</p>
<?php

class laptop {

    private $data = 'naga terbang',
            $alamat = 'japon';

    public $merk = 'pear',
            $harga = '10jt an';

            public function private1() {
                echo " CLASS <br>";
                echo "jenis : ".$this->data."<br>";
                echo "dibuat di : ".$this->alamat."<br>";
            }
            public function public1() {
                echo "produk : ".$this->merk."<br>";
                echo "harga : ".$this->harga."<br>";
            }
}

$jenis = new laptop();

$jenis->private1();
echo "<br> TANPA CLASS <br>";
$jenis->public1();
 
?>

 
 
 
 

