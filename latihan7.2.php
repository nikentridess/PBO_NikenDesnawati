<?php
class Manusia {
    public $nama;
    public $umur;
    public $gender;

    // Method untuk bicara
    function bicara() {
        echo "Selamat Datang";
    }

    // Method untuk mendapatkan informasi
    function getInfo() {
        echo "Nama = " . $this->nama . "<br/>";
        echo "Umur = " . $this->umur . "<br/>";
        echo "JK = " . $this->gender . "<br/>";
    }
}

// Class Ayah yang mewarisi class Manusia
class Ayah extends Manusia {
    function pekerjaan() {
        echo "Pegawai Negeri Sipil";
    }
}

// Class Ibu yang mewarisi class Manusia
class Ibu extends Manusia {
    function pekerjaan() {
        echo "Ibu Rumah Tangga";
    }
}

// Class Anak yang mewarisi class Manusia
class Anak extends Manusia {
    function pekerjaan() {
        echo "Pelajar";
    }
}

// Membuat objek ayah
$objekAyah = new Ayah();
$objekAyah->nama = "Budi";
$objekAyah->gender = "Laki-Laki";
$objekAyah->umur = 45;

echo "<b>Info Ayah</b><br/>";
$objekAyah->getInfo();
$objekAyah->pekerjaan(); 
echo "<br/><br/>";

// Membuat objek ibu
$objekIbu = new Ibu();
$objekIbu->nama = "Dini";
$objekIbu->gender = "Perempuan";
$objekIbu->umur = 38;

echo "<b>Info Ibu</b><br/>";
$objekIbu->getInfo();
$objekIbu->pekerjaan(); 
echo "<br/><br/>";

// Membuat objek anak
$objekAnak = new Anak();
$objekAnak->nama = "Ardi";
$objekAnak->gender = "Laki-Laki";
$objekAnak->umur = 15;

echo "<b>Info Anak</b><br/>";
$objekAnak->getInfo();
$objekAnak->pekerjaan();
?>

