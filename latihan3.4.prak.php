<?php
 
class PegadaianSyariah {
    var $pinjaman = 1000000;
    var $bunga = 10;
    var $lamaAngsuran = 5;
 
    // Method untuk menghitung total pinjaman dengan bunga
    public function hitungTotalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }
 
    // Method untuk menghitung besaran angsuran per bulan
    public function hitungAngsuranPerBulan() {
        $totalPinjaman = $this->hitungTotalPinjaman();
        return $totalPinjaman / $this->lamaAngsuran;
    }
 
    // Method untuk menampilkan hasil
    public function tampilkanHasil() {
        $totalPinjaman = $this->hitungTotalPinjaman();
        $angsuranPerBulan = $this->hitungAngsuranPerBulan();
 
        echo "TOKO PEGADAIAN SYARIAH"."<br>";
        echo "Jl Keadilan No 16"."<br>";
        echo "Telp. 72353456"."<br>";
        echo "<br>";
        echo "Total Pinjaman: Rp " . number_format($totalPinjaman, 0, ',', '.') . "<br>";
        echo "Besaran Angsuran per bulan: Rp " . number_format($angsuranPerBulan, 0, ',', '.') . "<br>";
    }
}
 
// Membuat objek PegadaianSyariah dan menampilkan hasil
$pegadaian = new PegadaianSyariah();
$pegadaian->tampilkanHasil();
 
?>