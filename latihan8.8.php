<?php

class Manusia {
    // Menentukan property dengan akses protected dan public
    protected $nama = "Ardi";
    var $kelas = "SI 2A";

    // Method protected untuk mendapatkan nama
    protected function getNama() {
        return "Nama: " . $this->nama;
    }

    // Method public untuk menampilkan nama
    public function tampilkanNama() {
        return $this->getNama();
    }

    // Method protected untuk mendapatkan kelas
    protected function getKelas() {
        return "Kelas: " . $this->kelas;
    }

    // Method public untuk menampilkan kelas
    public function tampilkanKelas() {
        return $this->getKelas();
    }
}

// Membuat objek dari kelas Manusia
$manusia = new Manusia();

// Menampilkan nama dan kelas
echo $manusia->tampilkanNama() . "<br/>";
echo $manusia->tampilkanKelas();

?>
