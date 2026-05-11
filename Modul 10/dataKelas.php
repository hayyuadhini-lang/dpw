<?php
require_once ('kelas/Mahasiswa.php');
$mhs1 = new Mahasiswa("Hayyu Adhini Wahida");
$mhs1->setNIM("NIM anda");
$mhs1->setKelas("2B");
$mhs1->setJurusan("Teknik");
$mhs1->setProdi("Teknologi Informasi");

// tampilkan nama nim kelas Jurusan Prodi dari $mhs1
 echo "<h3>Data Mahasiswa</h3>";
 echo "Nama: ".$mhs1->getNama()."<br>";
 echo "NIM: ".$mhs1->getNIM()."<br>";
 echo "Kelas: ".$mhs1->getKelas()."<br>";
 echo "Jurusan: ".$mhs1->getJurusan()."<br>";
 echo "Prodi: ".$mhs1->getProdi()."<br><br>";
?>
/* PAda praktik kali ini kita mempelajari konsep pewarisan (inheritance) dalam Object-Oriented Programming (OOP) menggunakan PHP.
class Mahasiswa merupakan turunan dari class Manusia, sehingga dapat menggunakan method yang sudah ada seperti setNama() dan getNama(). Selain itu, class Mahasiswa menambahkan atribut baruu seperti NIM, kelas, Jurusan, dan Prodi beserta method setter dan getter untuk mengelola datanya.
selanjutnya dibuat objek class Mahasiswa untuk mengisi dan menampilkan data mahasiswa.*/