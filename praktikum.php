<?php
// Class Karyawan untuk menghitung gaji pokok dan lembur
class Karyawan {
    private $nama;
    private $golongan;
    private $jamLembur;
    private $gajiPokok;
    const TARIF_LEMBUR = 15000;
 
    // Array untuk gaji pokok berdasarkan golongan
    private $gajiGolongan = [
        "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
        "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
        "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
        "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
    ];
 
    // Constructor
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->setGajiPokok();
    }
 
    // Method untuk set gaji pokok berdasarkan golongan
    private function setGajiPokok() {
        if (array_key_exists($this->golongan, $this->gajiGolongan)) {
            $this->gajiPokok = $this->gajiGolongan[$this->golongan];
        } else {
            echo "Golongan tidak valid.\n";
            exit();
        }
    }
 
    // Method untuk mendapatkan gaji pokok
    public function getGajiPokok() {
        return $this->gajiPokok;
    }
 
    // Method untuk menghitung total gaji
    public function hitungTotalGaji() {
        $gajiLembur = $this->jamLembur * self::TARIF_LEMBUR;
        return $this->gajiPokok + $gajiLembur;
    }
 
    // Method untuk menampilkan informasi gaji karyawan
    public function tampilkanGaji() {
        echo "Nama Karyawan : " . $this->nama . "\n";
        echo "Golongan       : " . $this->golongan . "\n";
        echo "Jam Lembur     : " . $this->jamLembur . " jam\n";
        echo "Gaji Pokok     : Rp " . number_format($this->getGajiPokok(), 2, ',', '.') . "\n";
        echo "Total Gaji     : Rp " . number_format($this->hitungTotalGaji(), 2, ',', '.') . "\n\n";
    }
 
    // Destructor untuk meng-unset objek
    public function __destruct() {
        echo "Data karyawan " . $this->nama . " telah diproses.\n";
    }
}
 
// Fungsi untuk input data dari pengguna
function input($prompt) {
    echo $prompt . ": ";
    return trim(fgets(STDIN));
}
 
// Main program
$jumlahKaryawan = (int) input("Masukkan jumlah karyawan");
$karyawanList = [];
 
for ($i = 0; $i < $jumlahKaryawan; $i++) {
    echo "\nData Karyawan " . ($i + 1) . ":\n";
    $nama = input("Masukkan nama karyawan");
    $golongan = input("Masukkan golongan (contoh: Ib, Ic, IIa, IIIc, dll)");
    $jamLembur = (int) input("Masukkan jumlah jam lembur");
 
    // Membuat objek Karyawan
    $karyawan = new Karyawan($nama, $golongan, $jamLembur);
    $karyawanList[] = $karyawan;
}
 
// Menampilkan data karyawan
echo "\n===== Laporan Gaji Karyawan =====\n";
foreach ($karyawanList as $karyawan) {
    $karyawan->tampilkanGaji();
}
?>
 