<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Upload file</title>
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307039">
        <meta name="author" content="Hayyu Adhini Wahida">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
            <p><label>Pilih Gambar yang akan di upload</label><br>
                <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
                <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php 
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOK =1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // cek apakah ada kiriman data dengan methode post
        if (isset($_POST["submit"])) {
            // chek apakah file berupa gambar
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                echo "File berupa citra/gambar - ".$check["mime"].".";
                $uploadOK = 1;
                // simpan kedalam folder gambar
            }else{
                echo "File bukan gambar";
                $uploadOK = 0;
            }
        }  
        //deteksi apakah ada file dengan nama yang sama
        if (file_exists($target_file)) {
            echo "Sorry, file already exists";
            $uploadOK = 0;
        } 
        //Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, File anda terlalu besar.";
            $uploadOK = 0;
        }
        if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
            echo "Sorry, hanya file JPG, JPEG, PNG & GIF.";
            $uploadOK =0;
        }
        if ($uploadOK == 0) {
            echo "Sorry, File anda gagal upload.";
        }else{
            // proses upload file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file". htmlspecialchars(basename($_FILES["gambar"]["name"])) ."Berhasil Upload.";
            }else{
                echo "Sorry, ada error saat upload.";
            }
        }
        ?>
    </body>
</html>
// pada praktik ini kita belajar membuat sisstem upload file gambar menggunakan PHP. program ini dimulai dengan menampilkan form untuk memilih file gambar yang akan upload, kemudian data dikirim menggunakan POST dengan atribut multipart/form-data.
// setelah file dipilih, program akan melakukan pengecekan untuk memastikan bahwa file yang di uuload benar benar berupa gambar fungsi getimagesize(). selain itu, dilakukan juga pengecekan apakah file dengan nama yang sama sudah ada, membatasi ukuran file, serta memastikan tipe file yang diizinkan hanya JPG, JPEG, PNG, GIF.
// jika semua syarat terpenuhi, file akn disimpan ke dalam folder tujuan mengggunakan fungsi move_uploaded_file(). namun jika ada salah satu syarat yang tidak terpenuhi, maka proses akan dibatalkan dan ditampilkan pesan kesalahan. 