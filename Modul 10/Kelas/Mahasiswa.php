<?php
require_once "Manusia.php";
class Mahasiswa extends Manusia {
    protected $NIM;
    protected $jurusan;
    protected $kelas;
    protected $prodi;

    public function __construct($nama){
        // kita bisa langsung memanfaatkan funsi dari kelas Manusia.php
        $this->setNama($nama);
    }
    public function getNIM(){
        return $this->NIM;
    }
    public function setNIM($NIM){
        $this->NIM = $NIM;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    public function getKelas(){
        return $this->kelas;
    }
    public function setKelas($kelas){
        $this->kelas = $kelas;
    }
    public function setProdi($prodi){
        $this->prodi = $prodi;
    }
    public function getProdi(){
        return $this->prodi;
    }

 }
?>