<?php
class kendaraan
{
    var $statusHarga;
    var $statusBBM;
    var $hargaBekas;
    var $jumlahpajak;
    var $harga = 60000000;
    var $tahunPembuatan = 2003;
    var $platNomor = "B1234XYZ";
    var $hariOperasi;



    function statusHarga()
    {
        if ($this->harga > 50000000)
            $statusHarga = 'Mahal';
        else
            $statusHarga = 'Murah';
        return $statusHarga;
    }
    function statusBBM()
    {
        if ($this->bahanBakar = "Premium" and $this->tahunPembuatan < 2005)
            $statusBBM = 'Mendapatkan subsidi';
        else
            $statusBBM = 'Tidak mendapatkan subsidi';
        return $statusBBM;
    }
    function hargaBekas()
    {
        if ($this->tahunPembuatan > 2005) {
            $hargaBekas = $this->harga * 20 / 100;
        } elseif ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan <= 2005) {
            $hargaBekas = $this->harga * 30 / 100;
        } else {
            $hargaBekas = $this->harga * 40 / 100;

        }
        return $hargaBekas;
    }

    function pajak()
    {
        if ($this->tahunPembuatan < 2017) {
            $jumlah_pajak = $this->harga * 0.025;
            return $jumlah_pajak;
        }
    }

    public function hariOperasi()
    {
        $platNomorAkhir = (substr($this->platNomor, -1));
        if (is_numeric($platNomorAkhir) && $platNomorAkhir % 2 == 0) {
            return ['Selasa', 'Kamis', 'Sabtu'];
        } else {
            return ['Senin', 'Rabu', 'Jumat', 'Minggu'];
        }
}

$kendaraan = new kendaraan();
echo "Status Harga: " . $kendaraan->statusHarga() . "<br>";
echo "Harga Bekas: " . $kendaraan->hargaBekas() . "<br>";
echo "Status BBM : " . $kendaraan->statusBBM() . "<br>";
echo "Jumlah Pajak : " . $kendaraan->pajak() . "<br>";
echo "Hari Operasi: " . implode(', ', $kendaraan->hariOperasi()) . "<br>";
}
?>