<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Konversi Nilai</title>
        <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale">
        <meta name="description" content="Belajar PHP">
        <meta name="keyword" content="">
        <meta name="author" content="Hayyu_Adhini">
</head>
<body>
    <h2>Konversi Nilai Angka Ke Huruf</h2>
    <form method="post">
        Masukkan Nilai:
        <input type="number" name="nilai" min="0" max="100" required>
        <button type="submit">Konversi</button>
    </form>
    <?php
/* Huruf Nilai
    C  = 0  -> 59
    BC = 60 -> 69
    B  = 70 -> 79
    AB = 80 -> 89
    A =  90 -> 100
*/

if (isset($_POST['nilai'])){
    $nilai = $_POST['nilai'];
    $huruf = "";

    if ($nilai >= 0 && $nilai <= 59){
        $huruf ="C";
    }elseif ($nilai >= 60 && $nilai <= 69) {
        $huruf = "BC";
    }elseif ($nilai >= 70 && $nilai <= 79) {
        $huruf = "B";
    }elseif ($nilai >= 80 && $nilai <= 89) {
        $huruf = "AB";
    }elseif ($nilai >= 90 && $nilai <= 100) {
        $huruf = "A";
    } else {
        $huruf = "Nilai Tidak Valid";
    }
    echo "<h3> Nilai Angka: $nilai</h3>";
    echo "<h3> Nilai Huruf: $huruf</h3>";
}
?>
<p>praktik kali ini kita belajar membuat program PHP yang digunakan untuk mengonversi nilai angka menjadi nilai huruf. jadi pengguna dapat memasukkan nilai melali form, kemdian nilai akan diproses menggunakan percabangan if-elseif-else untuk menetukan kategori huruf (C, BC, B, AB, A) berdasarkan rentang nilai yang telah ditentukan. program ini juga melakukan validasi dengan memastikan nilai berada di antara 0-100, dan akan menampilkaan pesan "Nilai tidak valid" jika di luar rentang. </p>
</body>
</html>
