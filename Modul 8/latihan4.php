<?php
$t = date ("H");
echo "If <br>";
if ($t < 16){
    echo "Selamat Siang! <br> <br>";
}
$t = date ("H");
echo "<br> If dan Else <br>";
if ($t < 20){
    echo "Selamat Siang! <br> <br>";
} else {
    echo "Selamat Malam! <br> <br>";
}
$t = date ("H");
echo "<br> Nested If <br>";
if ($t < 10 ){
    echo "Selamat Pagi!";
} elseif ($t <16) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}
echo "<br><br> pada praktik kali ini kita diajarkan membuat program PHP dengan menggunakan percabangan If, if-else, dan if-elseif-esle (nested if) untuk menentukan ucapan berdasarkan waktu saat ini yang diambil dari fingsi date(H (jam dalam format 24 jam). 
      <br> pada if, program hanya mengecekk satu kondisi, yaitu jika jam kurang dari 16, makka menampilkan selamat siang. <br> pada if-else, program memberikan dua kemungkinkan hasil, yaitu selamat siang jika kurang dari 20, dan selamat malam jika tidak. <br> pada if-elseif-else, program lebih lengkap karena memiliki beberapa kondisi yaitu kurang dari 10 maka selammat pagi, kurang dari 16 mak selamat sore, dan selain itu maka selamat malam.";
?>
