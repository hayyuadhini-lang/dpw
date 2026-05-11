<?php
require_once ('Kelas/Manusia.php');

$dhini = new Manusia();
$dhini->setNama("Hayyu");
$dhini->setUmur(19);

$adhin = new Manusia();
$adhin->setNama("Adhini");
$adhin->setUmur(19);


echo "Identitas Dhini: <br>";
echo "Nama: ".$dhini->getNama()."<br>";
echo "Umur: ".$dhini->getUmur()."tahun<br>";
echo "NIK: ".$dhini->getNIK()."<br><br>";

echo "Identitas Adhin: <br>";
echo "Nama: ".$adhin->getNama()."<br>";
echo "Umur: ".$adhin->getUmur()."tahun<br>";
echo "NIK: ".$adhin->getNIK()."<br><br>";
?>
/* pada praktik kali ini kita mempelajari konsep Object-Oriented Programming (OOP) dalam PHP dengan menggunakan class Manusia yang memiliki atribut seperti nama, umur, dan NIK.
Data pada atribut tersebut tidak diakses secara langsung, malainkan melalui method getter dan setter. 
Setter berdungsi untuk mengissi atau mengubah nilai atribut dari luar class. Sedangkan Getter berfungsi untuk mengambil atau menampilkan nilai atribut. 
dengan penggunaan setter dan getter, data menjadi lebih aman karena akses tehadap atribut dapat dikontrol.
Selanjutnya dibuat dua objek, yaitu $dhini dan $adhin, yang masing-masing menyimpan data berbeda dan ditampilkan ke halaman.*/