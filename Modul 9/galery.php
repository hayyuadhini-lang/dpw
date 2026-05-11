<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Galeri Gambar</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            .gallery {
                display: grip;
                grid-tempalate-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }
            .gallery img {
                width: 100%;
                height: 150px;
                object-fit: cover;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s, box-shadow 0.3s;
            }
        </style>
    </head>
    <body>
        <h2>Galeri Gambar</h2>
        <div class="galery">
            <?php
            $fileList = glob('gambar/*');
            foreach ($fileList as $filename) {
                if (is_file($filename)) {
                    echo "<img src='$filename' alt='gambar'>";
                }
            }
            ?>
        </div>
    </body>
</html>
// pada prkatik kali ini kita belajar membuat galeri gambar sederhana menggunakan PHP. dengan program yang mengambil file gambar dari folder gambbar menggunakan fungsi glob (), kemudian menampilkannya satu persatu menggunakan perulangan foreach. setiap file dicek terlebih dahulu dengan is_file() untuk memastikan bahwa yang ditampilkan benar-benar file.