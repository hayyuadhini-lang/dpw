<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Komentar</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>
    <?php
    $name = $email = $comment = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["nama"]; 
        $email = $_POST["email"]; 
        $comment = $_POST["comment"]; 
        echo("Nama : ".$name."<br>");
        echo("Email : ".$email."<br>");
        echo("Komentar : ".$comment."<br>");
        echo("<hr>");
    }
    function bersihkan_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    ?>
    <p>
        pada praktika kali ini kita belajar membuat form komentar sederhana menggunakan PHP. program menampilkan form yang berisi input nama, email komentar, kemudian data dikirm menggunakan metode POST. setelah foem disubmid, data yang dimasukkan akan ditangkap dan ditampilakan kemnali dihalaman sebagai output.
        selain itu, disediakan juga fungsi bersihkan _ data () yang digunakan untuk membersihkan input dari pengguna agar lebih aman, sperti menghilangakan spasi berlebihan, karakter khusus, dan simbol yang tidak diperlukan.
        <br><br>
        dan jika kode img src= "http://url.to.file./tidak.ada" onerror=alert('hacked'); ini kita tuliskan dikomentar maka akan muncul pop-up karena broser menjalankan JavaScript dari input pengguna. hal ini terjadi karena tidak ada proses validasi atau pembersihan input, sehingga membuka celah XSS.
    </p>
    </body>
</html>
