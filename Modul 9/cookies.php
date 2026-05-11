<?php
$pesan = "";
 if (isset ($_POST['nim'])&& isset($_POST['nama'])&& isset($_POST['email'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            
            setcookie("nim", $nim, time()+ 3600,"/");
            setcookie("nama", $nama, time()+ 3600,"/");
            setcookie("email", $email, time()+ 3600,"/");

            echo"Data berhasil disimpan di cookies.<br>";
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Identitas</title>
    </head>
    <body>
        <h2>Masukkan Identitas</h2>
        <?php
        if ($pesan != "") {
        echo $pesan. "<br>";
        echo"<a href='tampil.php'>Lihat Data</a>";
        }
        ?>
        <form  method="post">
            NIM: <input type="text" name="nim"><br><br>
            Nama: <input type="text" name="nama"><br><br>
            Email: <input type="email" name="email"><br><br>
            <input type="submit" value="Simpan">
        </form>
        <?php
        echo "<h2>Data dari Cookies</h2>";
        if (isset ($_COOKIE['nim'])&& isset ($_COOKIE['nama'])&& isset($_COOKIE['email'])) {
           echo "NIM: ".$_COOKIE["nim"]."<br>";
           echo"Nama: ".$_COOKIE["nama"]."<br>";
           echo "Email: ".$_COOKIE["email"]."<br>";
        } else{
            echo "Data tidak ditemukan di cookies";
        }
        // pada praktik kali ini kita belajar membuat form identitas sederhana yang memanfaatkan cookies untuk menyimpan data pengguna sedperti NIM, nama, dan email. data yang di input melalui form akan diproses menggunakan metode POST,
        // kemudian disimpan kedalam cookies menggunakan fungsi setcookie() derngan waktu tertentu. setelah data tersimpan, program akan menampilkan kendali data tersebut dengan mengambil nilai cookies. tampilan diatur secara sederhana dalam stu file agar proses input output dapat langsung terlihat. 
        ?>
    </body>
</html>