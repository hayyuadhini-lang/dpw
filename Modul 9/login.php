<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8".>
        <title>Login</title>
    </head>
    <body>
        <?php
        $name = $email = "";
        $nameErr = $emailErr = "";
        function berhihkan_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars( $data);
            return $data;
        }
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["u"])) {
                 $nameErr = "masukkan username";
            }else {
                $name = berhihkan_input($_POST["u"]);
            }if (empty($_POST["p"])) {
                 $emailErr = "masukkan password";
            }else{
                $email = berhihkan_input($_POST["p"]);
            }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username: <input type="text" name="u">
            <span class="error">*<?php echo $nameErr;?></span>
            <br><br>
            Password: <input type="password" name="p">
            <span class="error">*<?php echo $emailErr;?></span>
            <br><br>
            <input type="submit" value="Login">
        </form>
        <p>pada praktik ini kita belajar membuat form login sederhana menggunakan PHP dengan menggunakan variabel input.
            program ini dimulai dengan mendefinisikan variabel untuk menyimpan data username dan password serta pesan error.
            kemudian dibuat fungsi untuk membersihkan input agar data yang dimasukkan lebih aman dengan menghilangkan spasi berlebihan, karakter khusus, dan tanda yang tidak diperlukan.
            selanjutnnya, ketika form dikirim menggunakan metode POST, program akan memeriksa apakah username dan password sudah diisi atau belum. jika salah satu kosong, maka akan ditampilkan pesan error disamping field input.
            jika sudah diisi, maka data akan diproses dan dibersihkan menggunakan fungsi yang telah dibuat.</p>
    </body>
</html>
