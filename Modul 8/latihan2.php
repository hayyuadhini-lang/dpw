<?php
    $txt = "selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x =5;
    $y =10;

    echo "<p> isi Variable txt adalah: $txt</p>";
    echo "<p> isi Variable x adalah: $x</p>";
    echo "<p> isi variable y adalah: $y</p>";
    echo "Belajar PHP di ". $txt2. "<br>";
    echo  $x + $y;

    define("nama_konstanta", "Hayyu Adhini Wahida");
    echo "<br>".nama_konstanta;

    echo "<br><br> pada praktik kali ini kita belajar membuat program PHP dengan menggunakan variabel dan konstanta. variabel seperti $ txt, $ txt2, $ y digunakan untuk menyimpan data berupa teks dan angka, kemudian di tampilkan menggunakan echo. selain itu, dilakukan juga operasi penjumlahan antara $ x dan $ y. <br> program juga menggunakan dengan define(), yaitu nama_konstanta, yang nilainya tidak dapat diubah."
?>
