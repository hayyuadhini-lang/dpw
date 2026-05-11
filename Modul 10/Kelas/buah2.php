<?php
class buah2 {
    public $nama;
    public $warna;
    public $bobot;

    function set_name($n){
        $this->nama = $n;
    }
    public function set_color($n){
        $this->warna = $n;
    }
    public function set_weight($n){
        $this->bobot = $n;
    }
}
$mango = new buah2();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');

echo "Nama: ".$mango->nama. "<br>";
echo "Warna: ".$mango->warna."<br>";
echo "Bobot: ".$mango->bobot." gram<br>";
"<br><br>"
?>

pada praktik kali ini terjadi error karena program mencoba memanggil method set_color() dan set_wight() dari luar class, padahal method tersebut memiliki access modifier protected dan private sehingga tidak dapat diakses secara langsung. Hal ini menyebabkan program tidak dapat berjalan dengan baik.
jadi untuk mengatasinya, method tersebut perlu diubah menjadi public agar bisa dipanggil dari objek.