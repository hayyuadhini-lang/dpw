<?php
$hari1 = "senin";
$hari2 = "selasa";
$hari3 = "rabu";
$hari4 = "kamis";
$hari5 = "jum'at";
$hari6 = "sabtu";
$hari7 = "minggu";

echo $hari1 . "<br>";
echo $hari2 . "<br>";
echo $hari3 . "<br>";
echo $hari4 . "<br>";
echo $hari5 . "<br>";
echo $hari6 . "<br>";
echo $hari7 . "<br> <br>";

$hari = ["Senin","Selasa","Rabu","Kamis","Jum'at","sabtu","Minggu"];
for ($i = 0; $i < count($hari); $i++) { 
    echo $hari[$i] ."<br>";
}
echo "<br>";
echo "<br>";
echo "pada prkatik kali ini kita belajar membuat program yang digunakan untuk menampilkan nama-nama hari dalam satuan minggu dengan dua cara berbeda, yaitu menggunakan variabel biasa dan array + perulangan.
      <br> pada bagian pertama, hari ditampilkan menggunakan 7 variabel terpisah. cara ini sederhana, tetapi kurang efisien jika datanya banyak. 
      <br> pada bagian kedua, hari disimpan dalam sebuah array, lalu ditampilkan menggunakan perulangan for. cara ini lebih simpel, rapi dan mudah dikembangkan. "
?>