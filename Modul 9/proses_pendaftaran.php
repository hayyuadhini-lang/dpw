<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    Selamat datang <b><?php echo $_POST["nama"]; ?></b><br>
    NIM                   : <?php echo $_POST["nim"]; ?><br>
    Email                 : <?php echo $_POST["email"]; ?> <br>
    Tempat, Tanggal Lahir : <?php echo $_POST["tempat"];?>,<?php echo $_POST["ttl"];?><br>
    Alamat                : <?php echo $_POST["alamat"];?><br>
    Jenis Kelamin         : <?php echo $_POST["jenis"];?><br>
    <?php
    echo "pada Praktik kali ini kita mempelajari tentang HTML yang dapat digunakan untuk membuat form input data seperti NIM, Nama, Email, Alamat, dan Gender.
          <br> form HTML tersebut kemudian dikirim ke file PHP menggunakan metode POST.
          <br> PHP berfungsi untuk mengambil data yang diinputkan di form menggunakan variabel POST dan menampilkannya kembali ke halaman web. 
          <br> metode GET digunakan untuk mengirim data dari form_pendaftaran.HTML ke proses_pendaftaran.PHP. melalui URL browser. jadi data yang diikirim akan terlihat pada address bar dalam bentuk parameter.
          <br>Metode GET biasanya digunakan untuk pengiriman data yang sederhana dan tidak bersifat rahasia karena semua data dapat dilihat pada URL. sedangkan POST Data tidak terlihat di URL karena data dikirm melui body request.
          ";
    ?>
    <p>
        pada praktik kali ini kita mempelajari cara membuat form input menggunakan HTML dan memproses data menggunakan PHP. Data seperti NIM, Nama, Email, Alamat, dan jenis kelamin dikirm dari form ke halaman PHP menggunakan metode Post, kemudian ditampilakan kembali menggunakan variabel $_POST.
        selain itu kita juga memahami perbedaan metode GET dan POST, dimanaa GET menampilkan data pada URL sehingga kuran aman, sedangkan POST lebih aman karena data dikirm melalui body request. dengan demikian, praktik ini menunjukkan bagaimana proses pengiriman dan pengolahan data form dalam aplikasi web secara sederhana.
    </p>
</body>
</html>