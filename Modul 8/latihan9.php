<?php
function writeMSg($nama) {
    echo "Selamat Datang ". $nama ."<br>";
}
writeMSg(nama:"Carmen");
function tambah(int $angka1, int $angka2) {
    $a= $angka1 + $angka2;
    return $a;
}
$hasil=tambah(angka1: 5, angka2:5);
echo ($hasil);
echo "<br><br> pada praktik kali ini kita belajar untuk membuat program PHP yang digunakan untuk menunjukkan penggunaan function (fungsi) untuk mebuat kode lebih terstruktur dan bisa digunakan kembali.
      <br> fungsi WriMsg ($ nama) digunakan untuk menampilkan pesan sambutan dengan nama yang diberikan.
      <br> tambah ($ angka1, $ angka2) digunakan untuk menghitung penjumlahan dua angka dan mengembalikan hasilnya dengan return.
      <br> pemanggilan fungsi menggunakan named arguments, sehingga lebih jelas dan mudah dibaca.
      <br> hasil dari fungsi ditampilkan menggunakan echo ";
?> 