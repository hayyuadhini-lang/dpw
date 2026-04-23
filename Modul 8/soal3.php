<?php
//data siswa (array asosiatif)
$data = [
    ["No" => 1, "poin" => 100,"nama" => "Carmen"],
    ["No" => 2, "poin" => 97, "nama" => "Jiwoo"],
    ["No" => 3, "poin" => 96, "nama" => "Juun"],
    ["No" => 4, "poin" => 90, "nama" => "A-na"],
    ["No" => 5, "poin" => 90, "nama" => "Ian"],
    ["No" => 6, "poin" => 99, "nama" => "Yuha"],
    ["No" => 7, "poin" => 98, "nama" => "Stella"],
    ["No" => 8, "poin" => 95, "nama" => "Yeon"]
];
echo "<h3>Jawaban:</h3>";
// a) poin siswa nomor urut 5
foreach ($data as $d) {
    if ($d["No"] == 5) {
        echo "a) Poin siswa no 5: ".$d["poin"]."<br>";
    }    
}
// b) nama siswa dengan poin 90
echo "b) Siswa dengan poin 90: ";
$ada = false;
foreach ($data as $d){
    if ($d["poin"] == 90) {
        echo $d["nama"].",  ";
        $ada = true;
    }
}
if (!$ada) {
    echo "Tidak ada";
}
echo "<br>";
// c) nama siswa dengan poin 100
echo "b) Siswa dengan poin 100: ";
$ada = false;
foreach ($data as $d){
    if ($d["poin"] == 100) {
        echo $d["nama"]."";
        $ada = true;
    }
}
if (!$ada) {
    echo "Tidak ada";
}
echo "<br>";
echo "<br>";
echo "pada praktik kali ini kita belajar membuat program PHP yang digunakan untuk mengolah data siswa menggunakan array asosiatif dan 
      dan menampilkan informmasi tertentu berdasarkan kondisi. <br> pada program kali ini kita diminta untuk menampilkan poin siswa dengan nomer urut 5 <br> lalu kita juga diminta untuk mencari dan menapilkan semua siswa yang memiliki poin 90
      <br> kemudian kita juga diminta untuk menampilkan siswa yang memiliki poin 100. <br> pada program ini kita menggunakan perulangan (foreach) dan percabangan (if) yang digunakan untuk membantu dalam menyaring data sesuai kebutuhan. <br> lalu kita juga menggunakan variabel ($ ada) untuk memastikan apakah data ditemukan atau tidak"
?>
