<?php
$total = 1387500;
//daftar pecahan
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
echo "<h3>Rincian Pecahan Uang</h3>";
foreach ($pecahan as $p) {
    $jumlah = floor($total / $p);
    $total = $total % $p;
    echo "Rp.". number_format($p, 0, ',', '.') .": $jumlah lembar <br>";
}
echo "<br>";
echo "<br>";
echo "pada praktik kali ini kita belajar untuk membuat program menghitung pembagian uang ke dalam berbagai pecahan secara otomatis. <br>
      program ini dimulai dengan jumlah uang Rp. 1.387.500 kemudian program menggunakan array pecahan uang dari yang terbesar hingga terkecil. <br>
      dengan bantuan perulangan (foreach), program akan menghitung jumlah lembar setiap pecahan menggunakan: 
      <br> a.) floor() untuk menentukan jumlah lembar.
      <br> b.) operator % digunakan untuk menghitung sisa uang
      <br> hasil yang akan dikeluarkan oleh program ini adalah uang yang dibagi secara efisien ke dalam pecahan yang tersedia."
?>