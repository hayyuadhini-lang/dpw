<?php
class buah
{
    public $name;
    protected $warna;
    private $berat;

    //setter
    public function setWarna( $warna){
        $this->warna = $warna;
    }
    public function setBerat($berat){
        $this->berat = $berat;
    }
    //Getter
    public function getWarna(){
        return $this->warna;
    }
    public function getBerat(){
        return $this->berat;
}
}

$mango = new buah();
$mango->name = 'Mango';
$mango->setWarna  ('Yellow');
$mango->setBerat  ('300');

echo "Nama: ". $mango->name ."<br>";
echo "Warna: ". $mango->getWarna()."<br>";
echo "Berat: ". $mango->getBerat() ." gram<br>";

?>
/* pada praktik kali ini terjadi error karena program mencoba mengakses atribut $warna dan $berat secara langsung dari luar class. Hal ini tidak diperbolehkan karena
    $warna memiliki access modifier Protected dan $berat memiliki access modifier private, sehingga keduanya tidak bisa diakses sembarangan. selain itu terdapat kesalaha
    penulisan variabel yaitu $buah yang sebenarnya tidak ada di dalam class. untuk mengatasinya, atribut tersebut harus diakses melalui method (getter dan setter) atau mengubah modifier menjadi public agar dapat digunakan dari luar class.
*/