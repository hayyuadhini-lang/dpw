<?php
session_start();
$pesan = "";
//Logout
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login2.php");
    exit;
}
// proses Login
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    try{
        if (empty($_POST['username']) || empty ($_POST['password'])){
            throw new Exception("Username dan password tidak boleh kosong");
        }
        $user = trim($_POST["username"]);
        $pass = trim($_POST["password"]);

        // data login sederhana
        $username = "admin";
        $password = "123";

        if($user === $username && $pass === $password){
            $_SESSION['user'] = $user;
            header("Location: login2.php");
            exit;
        }else{
            throw new Exception("Username atau password salah.");
        }
        }catch(Exception $e){
         $pesan = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login & Dashboard</title>
    </head>
    <body>
        <?php if (isset($_SESSION["user"])): ?>
            <h2>Dashboard</h2>
            <p>Selamat Datang, <b><?php echo $_SESSION['user'];?></b></p>
            <a href="?logout=1">Logout</a>
        <?php else: ?>
            <h2>Login</h2>
        <?php if ($pesan != ""): ?>
                <p style="color:red;"><?php echo $pesan; ?></p>
                <?php endif; ?>
        <form method="post">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
        <?php endif; ?>
        // pada praktik kali ini kita belajar membuat sistem login sederhana berbasis session dalam satu file. program mengvalidasi input username dan password, kemudian mencocokkannya dengan data yang telah ditentukan. jika sesuai, data disimpan ke dalam ssesion dan pengguna masuk kedashbord. jika terjadi kesalahan, pesan error ditampilkan menggunakan exception handling. tampilan diatur dengan kondisi, yaitu menampilkan dashboard jika sudah login dan form login jika belum. selin itu tersedia fitur logout yang menghapus ssesion dan mengembalikan pengguna kehalaman login.
    </body>
</html>
