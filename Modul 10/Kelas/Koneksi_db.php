<?php
class Koneksi_db{
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";

    private $con =false;
    private $hasil = array();

    public function __connect() {
        if (!$this->con){
            $myconn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass);
            @mysqli_set_charset($myconn, 'utf8');
            if ($myconn){
                $seldb = @mysql_select_db($myconn, $this->db_name);
                if ($seldb){
                    $this->con = true;
                    return true;
                }else{
                    array_push( $this->hasil, mysqli_error($myconn));
                    return false;
                }
            } else{
                array_push( $this->hasil, mysqli_connect_error());
                return false;
            }
        } else {
            return true;
        }
    }
    public function getHasil() {
        return $this->hasil;
    }
}
"<br><br>"
?>
/* pada praktik kali ini kita mempelajari cara membuat koneksi database menggunakan konsep OOP dan PHP. class Koneksi_db digunakan untuk menyimpan konfigurasi database seperti host, user, password, dan nama database, serta menangani proses koneksi.
method _connect() berfungsi untuk menghubungkan ke database dan mengecek apakah koneksi berhasil atau tidak. jika terjadi kesalahan, pesan error akan disimpan dalam array $hasil agar dapat ditampilkan atau dicek kembali.
*/