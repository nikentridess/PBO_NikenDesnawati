<?php 
// Kelas Employee sebagai kelas dasar
class Employee {
    protected $nama;
    protected $gaji;
    protected $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function getGaji() {
        return $this->gaji;
    }

    public function getLamaKerja() {
        return $this->lamaKerja;
    }
}

// Kelas Programmer yang mewarisi Employee
class Programmer extends Employee {
    public function hitungBonus() {
        if ($this->lamaKerja < 1) {
            // Tidak ada perubahan gaji
            return $this->gaji;
        } elseif ($this->lamaKerja >= 1 && $this->lamaKerja <= 10) {
            // Bonus 0.01 dari lama kerja
            $bonus = $this->gaji + (0.01 * $this->lamaKerja * $this->gaji);
            return $bonus;
        } elseif ($this->lamaKerja > 10) {
            // Bonus 0.02 dari lama kerja
            $bonus = $this->gaji + (0.02 * $this->lamaKerja * $this->gaji);
            return $bonus;
        }
    }
}

// Kelas Direktur yang mewarisi Employee
class Direktur extends Employee {
    public function hitungBonus() {
        // Bonus 0.5 dari lama kerja + tunjangan 0.1 dari lama kerja
        $bonus = $this->gaji + (0.5 * $this->lamaKerja * $this->gaji) + (0.1 * $this->lamaKerja * $this->gaji);
        return $bonus;
    }
}

// Kelas PegawaiMingguan yang mewarisi Employee
class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stockBarang;
    private $penjualan;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stockBarang, $penjualan) {
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stockBarang = $stockBarang;
        $this->penjualan = $penjualan;
    }

    public function hitungBonus() {
        if ($this->penjualan > 0.7 * $this->stockBarang) {
            // Bonus 10% dari harga barang tiap penjualan
            $bonus = $this->gaji + (0.1 * $this->hargaBarang * $this->penjualan);
            return $bonus;
        } else {
            // Bonus 3% dari harga barang tiap penjualan
            $bonus = $this->gaji + (0.03 * $this->hargaBarang * $this->penjualan);
            return $bonus;
        }
    }
}

// Contoh penggunaan
// Programmer dengan masa kerja 5 tahun dan gaji awal 10000
$programmer = new Programmer("Andi", 10000, 5);
echo "Gaji Programmer: " . $programmer->hitungBonus() . "<br>";

// Direktur dengan masa kerja 15 tahun dan gaji awal 20000
$direktur = new Direktur("Budi", 20000, 15);
echo "Gaji Direktur: " . $direktur->hitungBonus() . "<br>";

// Pegawai Mingguan dengan gaji awal 5000, harga barang 100, stock 1000, dan penjualan 800
$pegawaiMingguan = new PegawaiMingguan("Citra", 5000, 3, 100, 1000, 800);
echo "Gaji Pegawai Mingguan: " . $pegawaiMingguan->hitungBonus() . "<br>";
?>
