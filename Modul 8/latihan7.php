<?php
$namaBuah = array(" Nanas", " Mangga", " Jeruk", " Apel", " Melon", " Manggis");
echo "Saya suka".$namaBuah[0].",".$namaBuah[1].",".$namaBuah[2].".";
echo "<br>";
echo "<br>";

// tampilkan buah Nanas
echo "saya suka" .$namaBuah[0]. "<br>";
// tampilkan buah Mangga
echo "saya suka" .$namaBuah[1]. "<br>";
// tampilkan buah Jeruk
echo "saya suka" .$namaBuah[2]. "<br>";
// tampilkan buah Apel
echo "saya suka" .$namaBuah[3]. "<br>";
// tampilkan buah Melon
echo "saya suka" .$namaBuah[4]. "<br>";
// tampilkan buah Manggis
echo "saya suka" .$namaBuah[5]. "<br>";
echo "<br>";


//array dengan Spesifik index
$umur = array("Karina"=>"25 Tahun", "Yuna"=>"35 Tahun", "Taeyeon"=>"37 Tahun");
$umur["BoA"] = "39 Tahun";

// tampilkan umur karina
echo "Umur Karina adalah : ".$umur['Karina']."<br>";
 echo "<br>";

// tampilkan semua umur
foreach ($umur as $nama => $nilai) {
    echo "$nama : $nilai <br>";
}
echo "<br><br> pada praktik kali ini kita diajarkan untuk membuat program PHP dengan menggunakan array 1 dimensi dan array asosiatif. pada bagian pertama, array $ namaBauh digunakan untuk menyimpan daftar buah, kemudian ditampilakan satu persatu menggunakan index numerik (dimulai dari 0). hal ini ,menunjukkan bahwa setiap data dalaam array dapat diakses berdasarkan urutannya. 
      <br> pada bagian kedua, kita menggunakan array asosiatif $ umur, dimana data disimpan dalam bentuk pasangan key (nama) dan value(umur). data dapat ditambahkan secara langsung dengan menentukan key baru, seperti BoA. selin itu, perulangan foreach digunakan untuk menampilkan seluruh array dengan lebih efisien."
?>

