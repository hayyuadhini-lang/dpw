<?php
// data gaji
$gajiPokok  = 3250000;
$tunjangan   = 1200000;
//hitung gaji kotor
$gajiKotor  = $gajiPokok + $tunjangan;
//hitung pajak (10% gaji kotor)
$pajak      = 0.10 * $gajiKotor;
//hitung gaji bersih
$gajiBersih = $gajiKotor - $pajak;
//tampilkan hasil
echo "Gaji Pokok  : Rp. ".number_format($gajiPokok,0, ',', '.')."<br>";
echo "Tujangan    : Rp. ".number_format($tunjangan,0, ',', '.')."<br>";
echo "Gaji Kotor  : Rp. ".number_format($gajiKotor,0, ',', '.')."<br>";
echo "Pajak (10%) : Rp. ".number_format($pajak,0, ',', '.')."<br>";
echo "Gaji Bersih : Rp. ".number_format($gajiBersih,0, ',', '.')."<br>";
echo "<br>";
echo "<br>";
echo "pada praktik kali ini kita belajar membuat program PHP yang digunakan untuk menghitung gaji bersih seseorang berdasarkan gaji pokok, tunjangan, dan pajak. <br>
      untuk menjalankan program ini kita harus menentukan terlebih dahulu gaji pokok dan tunjangan. kemudian menghitung gaji kotor. lalu  menghitung pajak sebesar 10% dari gaji kotor. dan terakhir program kan menghitung gaji bersih dengan cara mengurangi gaji kotor dengan pajak.<br>
      hasil akan ditampilkan dengan format rupiah menggunakan number_format() untuk tampilan. "
?>