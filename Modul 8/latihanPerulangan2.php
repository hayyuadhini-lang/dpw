<?php
$angka = array(12, 13, 14, 15, 16, 67, 189, 346, 876, 54232, 3256);
echo "<h2>Menentukan Ganjil atau genap</h2>";
foreach ($angka as $nilai) {
    if ($nilai %2== 0) {
        echo "$nilai = Genap <br>";
    } else {
        echo "$nilai = Ganjil <br>";
    }
}
echo "<br> <br>";
echo "pada praktik kali ini kita belajar membuat program PHP yang digunakan untuk menentukan apakah setiap angka dalam array termasuk bilangan ganjil genap.
      <br> program ini berkerja dengan Data angka disimpan dalam sebuah array, lalu program akan menggunakan perulangan foreach untuk mengambil setiap nilai dalam array. kemudian menggunakan percabangan if-else dengan operasi modulus (%): jadi jika sisa dibagi 2 = 0 berarti genap tapi jika tidak berarti ganjil.
      <br> hasil program ini ditampilkan satu persatu ke layar.";
?>