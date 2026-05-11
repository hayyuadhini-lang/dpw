<?php
$data = array(
    array("nama" => "Scoups", "umur" => "30"),
    array("nama" => "jeonghan", "umur" => "30"),
    array("nama" => "Joshua", "umur" => "30"),
    array("nama" => "Jun", "umur" => "29"),
    array("nama" => "Hoshi", "umur" => "29"),
    array("nama" => "Wonwoo", "umur" => "29"),
    array("nama" => "Woozi", "umur" => "29"),
    array("nama" => "Dk", "umur" => "29"),
    array("nama" => "Mingyu", "umur" => "29"),
    array("nama" => "The8", "umur" => "28"),
    array("nama" => "Seungkwan", "umur" => "28"),
    array("nama" => "Vernon", "umur" => "28"),
    array("nama" => "Dino", "umur" => "27"),
    array("nama" => "Hayyu", "umur" => "19"),
    array("nama" => "Adhini", "umur" => "19")
    );
    $json = json_encode($data, JSON_PRETTY_PRINT);
    echo "<h2>Data Array (Nama dan Umur)</h2>";
    echo "<h3>DAta dalam format array:</h3>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "<h3>Data dalam format JSON:</h3>";
    echo "<pre>";
    echo $json;
    echo "</pre>";
    echo "pada praktik kali ini kita belajar membuat sebuah array multidimensi yang berisi data nama dan umur dengan minimal 15 data. data yang telah dibuat kemudian ditampilkan dalam bentuk array menggunakan fungsi print_() agar struktur aslinya dapat terlihat dengan jelas.
          selanjutnya array tersubut dikonversi ke dalam format JSON menggunakan json_encode(), sehingga data menjadi lebih ringan, terstruktur, dan mudah digunakan dalam pertukaran data terutama pada aplikasi web. Hasil pertukaran JSON ditampilkan menggunakan tag < pre > dan opsi JSON_PRETTY_PRINT agar tampil lebih rapi dan mudah dibaca."
    ?>