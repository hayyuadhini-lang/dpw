<?php
$warna = "hijau";
switch ($warna) {
    case "merah":
        echo "Warna adalah Merah";
        break;
    case "kuning":
        echo "Warna adalah kuning";
        break;
    case "hijau":
        echo "Warna adalah Hijau";
        break;
    default:
        echo "Warna tidak dikenal";
}
echo "<br>";
echo "<br><br> pada praktik kali ini kita diajarkan membuat program PHP dengan menggunakan percabangan switch untuk mengecek nilai dari variabel $ warna. program akan membendingkan nilai $ warna dengan kondisi (case), yaitu (merah), (kuning), dan (hijau). jika nilai yang cocok ditemuukan, maka program akan menampilkan pesan sesuai case. 
      <br> pada program ini, karena nilai warna $ warna adalah hijau, maka output yang ditampilkan adalah warna adalah hijau. perintah break digunakan untuk menghentikan pengecekan setelah kondisi terpenuhi, agar tidak lanjut ke case berikutnya. jika ada kondisi yang cocok, maka bagian default akan dijalankan. ";
?>