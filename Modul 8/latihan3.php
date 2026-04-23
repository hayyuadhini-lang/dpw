<?php
$x = 5;
$y = 10;

echo "Penambahan ". $x + $y ."<br>";
echo "Pengurangan ". $x - $y ."<br>";
echo "Perkalian ". $x * $y ."<br>";
echo "Pembagian ". $x / $y ."<br>";
echo "Modulus ". $x % $y ."<br>";
echo "Exponensial ". $x ** $y ."<br> <br>";

$x += 2; //$x = $x =2
$y *= 2; //$y = $y =2
echo "Penambahan x ".$x. "<br>";
echo "perkalian y".$y. "<br>";
echo ("<br>");

echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x =".$x."<br>";
echo ("<br>");

echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y =".$y."<br>";
echo ("<br>");


$user = "Hayyu Adhini";
$status = (empty($user))? "kosong" : "Ada isi";
echo $status."<br>";
echo $color = $color ?? "red";
echo "<br><br> pada praktik kali ini kita belajar membuat program PHP dengan menggunakan berbagai operator dalamm pemograman <br>
      <b>Operator Aritmatika</b> untuk melakukan perhitungan seperti penjumlahan, pengurangan, perkalian, pembagian, modulus, dan eksponensial 
      <br> <b>Operator penugasan</b> seperti $ x += 2 dan $ y *= 2 yang digunakan untuk mengubah nilai variabel secara singkat.
      <br> <b>Operator Increment dan decrement</b> (++ dan --) untuk menambahkan atau mengurangi nilai variabel, baik sebelum maupun sesudah digunakan. <br> <b>Operator teranary</b> untuk pengecekan kondisi secara singkat, seperti menentukan apakah variabel $ user kosong atau tidak.
      <br> <b>Operator null coalescing</b> (??) untuk memberikan nilai default jika variabel belum ada atau bernilai
      ";
      // perbedaan $x++ dan ++$x adalah kalau $x++ nilai $x digunakan lebih dahulu, baru ditambahkan. kalau ++$x adalah nilai $x ditambahkan dulu baru digunakan
?>