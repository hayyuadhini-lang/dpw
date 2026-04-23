<?php
// array 2 dimensi
$array = array(
    "2B" => array("Karina", "Winter", "Ning-ning", "Giselle"),
    "4C" => array("Umji", "SinB", "Eunha", "gyuha"));
//menampilkan data array
print_r($array);
echo "<br>";
echo "<br>";
// menampilkan 2B
print_r($array['2B']);
echo "<br>";
echo "<br>";
// menampilkan 4C dengan  index 0
echo $array['4C'][0]."<br>";
// tampilakn SinB
echo $array['4C'][1]."<br>";
// tampilkan Giselle
echo $array['2B'][3]."<br>"; 
// data kelas bisa ditulis juga dengan
$array_simple = [
    "2B" => ["Karina", "Winter", "Ning-ning", "Giselle"],
    "4C" => ["Umji", "SinB", "Eunha", "gyuha"]
];
echo "<br><br> pada praktik kali ini kita belajar membuat program PHP yang digunakan untuk membuat dan menampilakan array 2 dimensi, yaitu array yang memiliki beberapa kelompok data yang masing masing berisi beberapa nama. program menampilkan seluruh isi array menggunakan print_r(), lalu menampilkan isi tertentu dengan memanggil key (seperti (2B) atau (4C)) dan index (seperti [0], [1], dll). <br><br>
      selain itu, kode juga menunjukkan dua cara penulisan array, yaitu menggunakan array() dan menggunakan tanda kurung siku [], yang keduanya memiliki fungsi yang sama.";
?>