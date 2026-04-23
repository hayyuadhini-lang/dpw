<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Konversi Terbilang</title>
        <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale">
        <meta name="description" content="Belajar PHP">
        <meta name="keyword" content="">
        <meta name="author" content="Hayyu_Adhini">
</head>
<body>
    <h2>Konversi Nilai Angka Ke Huruf</h2>
    <form method="post">
        Masukkan Nilai (1-9):
        <input type="number" name="angka" min="0" max="100" required>
        <button type="submit">Konversi</button>
    </form>
    <?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];
        $hasil = "";

        Switch ($angka){
        case 1:
            $hasil = "satu";
            break;
        case 2:
            $hasil = "dua";
            break;
        case 3:
            $hasil = "tiga";
            break;
        case 4:
            $hasil = "empat";
            break;
        case 5:
            $hasil = "lima";
            break;
        case 6:
            $hasil = "enam";
            break;
        case 7:
            $hasil = "tujuh";
            break;
        case 8:
            $hasil = "delapan";
            break;
        case 9:
            $hasil = "sembilan";
            break;
        default:
            $hasil = "Angka tidak valid";
    }

    echo "<h3> Angka: $angka</h3>";
    echo "<h3> Terbilang: $hasil</h3>";
    }
    ?>
    <p> pada praktik kali ini kita belajar membuat program sederhana PHP yang digunakann untuk mengubah angka 1-9 menjadi bentuk terbilang menggunakan switch. jadi pengguna bisa memasukkan angak melalui form, lalu program akan menampilkan hasil dalam bentuk kata. jika angka diluar ketentuan, maka akan muncul pesan "angka tidak valid"</p>
    </body>
    </html>