<?php
require_once('kelas/akunBank.php');
$data1=new akunBank(1, 10000);
$data1->setNama("Nasabah Pertama");

$data2=new akunBank(2, 10000);
$data2->setNama("Nasabah Kedua");

echo "<h3>Data Akun 1</h3>";
echo "Nama: ".$data1->getNama()."<br>";
echo "Nomor Akun: ".$data1->getAccountNumber()."<br>";
echo "Saldo Awal: ".$data1->tampilkanUang()."<br>";
$data1->tambahUang(5000);
echo "Saldo Setelah tambah: Rp ".$data1->tampilkanUang()."<br>";
echo "Saldo setelah kurang : Rp " . $data1->tampilkanUang() . "<br>";
echo "Pajak (11%): Rp " . $data1->hitungPajak() . "<br>";

echo "<h3>Data Akun 2</h3>";
echo "Nama: " . $data2->getNama() . "<br>";
echo "Nomor Akun: " . $data2->getAccountNumber() . "<br>";
echo "Saldo Awal : Rp " . $data2->tampilkanUang() . "<br>";
$data2->kurangiUang(60000); // menguji saldo tidak mencukupi
echo "Pajak (11%) : Rp " . $data2->hitungPajak() . "<br><br>";

?>
/*pada praktik akali ini kita mempelajari penerapan konsep Object-Oriented Programming (OOP) dalam PHP dengan membuat class akunBank.
Class ini digunakan untuk mengelola data akun seperti nasabah, nomor akun, dan jumlah uang.
Method yang dibuat memungkinkan proses penambahan saldo, pengurangan saldo, serta perhitungan pajak dari saldo yang dimiliki.
selain itu, terdapat validasi pada method kurangiUang() untuk memastikan saldo mencukupi sebelum dilakukan pengurangan.
Program kemudian membuat objek dari class tersebut untuk menampilkan data masing-masing akun melakukan beberapa Opersai seperti manambah dan mengurangi saldo.*/
