<?php
// while loop
$x = 10;
while ($x >= 5) {
    echo "Nomor : $x <br>";
    $x--;
}
echo"<br>";
// do while
$x = 1;
do {
    echo "Nomor : $x <br>";
    $x++;
}while ($x <= 5);
echo"<br>";
//foreach
$colors = array("red","green","blue","yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
echo"<br>";
//for
for ($x = 0; $x < 10; $x++) {
    echo "Nomor : $x <br>";
} 
echo"<br>";
//for dengan break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
    break;
    }
    echo "Nomor :: $x <br>";
}
echo "<br><br> pada praktik kali ini kita diajarkan membuat program PHP yang menunjukkan berbagai jenis perulangan (looping) yang digunakan untuk menampilkan data secara berulang dengan cara yang berbeda-beda. <br>
      <br> <b>While</b> digunakan untuk perulangan dengam kondisi diawal, contoh dengan menampilkan angka daeri 10 sampai 5 (menurun). <br> <b>Do..While</b> hampir sama, tetapi minimal dijalankan satu kali karena kondisi dicek di akhir, contoh menampilkan angka 1 sampai 5. <br> <b>Foreach</b> digunakan khusus untuk menampilkan isi array, seperti daftar wrna tanpa perlu menggunakan index.
      <br> <b>For</b> digunakan ketika jumlah perulangan suddah diketahui, contoh menampilkan angka dari 0 sampai 9. <br> <b>For dengan break</b> menunjukkan bahwa perulangan bisa dihentikan lebih awal saat kondisi tertentu, contoh berhenti saat angka 4.  "
?>   
