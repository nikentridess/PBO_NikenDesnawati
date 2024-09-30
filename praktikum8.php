<?php

class Karyawan {
    private $golongan;
    private $jamLembur;

    // Konstruktor dengan parameter
    public function __construct($golongan, $jamLembur) {
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
    }

    // Destruktor
    public function __destruct() {
        // Tidak ada yang perlu dilakukan saat objek dihapus
    }

    // Method untuk set golongan
    public function setGolongan($golongan) {
        $this->golongan = $golongan;
    }

    // Method untuk get golongan
    public function getGolongan() {
        return $this->golongan;
    }

    // Method untuk get gaji pokok
    public function getGajiPokok() {
        $gaji = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IId" => 2300000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IIId" => 2700000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000
        ];
        return isset($gaji[$this->golongan]) ? $gaji[$this->golongan] : 0;
    }

    // Method untuk menghitung gaji lembur
    public function hitungGajiLembur() {
        return $this->jamLembur * 15000;
    }

    // Method untuk menampilkan informasi karyawan
    public function display() {
        $gajiPokok = $this->getGajiPokok();
        $gajiLembur = $this->hitungGajiLembur();
        $totalGaji = $gajiPokok + $gajiLembur;

        return "<tr>
                    <td>{$this->golongan}</td>
                    <td>{$gajiPokok}</td>
                    <td>{$this->jamLembur}</td>
                    <td>{$gajiLembur}</td>
                    <td>{$totalGaji}</td>
                </tr>";
    }
}

// Array untuk menyimpan objek Karyawan
$karyawanArray = [];

// Input data karyawan
while (true) {
    echo "Masukkan golongan karyawan (contoh: Ib, IIa) atau 'exit' untuk selesai: ";
    $golongan = trim(fgets(STDIN));
    
    if ($golongan === 'exit') {
        break;
    }

    echo "Masukkan jam lembur karyawan: ";
    $jamLembur = (int)fgets(STDIN);

    $karyawanArray[] = new Karyawan($golongan, $jamLembur);
}

// Menampilkan header tabel
echo "<table border='1'>
        <tr>
            <th>Golongan</th>
            <th>Gaji Pokok</th>
            <th>Jam Lembur</th>
            <th>Gaji Lembur</th>
            <th>Total Gaji</th>
        </tr>";

// Menampilkan data karyawan
foreach ($karyawanArray as $karyawan) {
    echo $karyawan->display();
}

echo "</table>";

// Menghapus objek karyawan
$karyawanArray = null;

?>

