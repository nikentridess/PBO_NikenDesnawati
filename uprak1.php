<?php
class BangunRuang {
    public $username = "Nikentd";
    public $password = "12272003";
    public $nomor;

    public function login(){
        if ($login = $this->username && $this->password) {
        echo "Selamat Anda Berhasil Login!"; 
    } else {
        echo "Mohon maaf, Username dan Password salah!, Silahkan Login kembali!";
    }
    }

    public function Pilihan(){
        if ($nomor = $this->nomor == 1 ){
        echo "Persegi";
    } elseif ($nomor = $this->nomor == 2 ) {
        echo "Persegi Panjang";
    } elseif ($nomor = $this->nomor == 3 ) {
        echo "Segitiga";
    } elseif ($nomor = $this->nomor == 4 ) {
        echo "Lingkaran";
    } elseif ($nomor = $this->nomor == 5 ) {
        echo "Belah Ketupat";
    } else {
        echo "Nomor Salah!";
    }

}
}

$login = new BangunRuang();
echo "Selamat datang di Aplikasi Bangun Ruang CLI. \n";
echo  "Silahkan Login terlebih dahulu. \n";
echo "Masukan Username : ";
$login = trim(fgets(STDIN));
echo "Masukan Password : ";
$login = trim(fgets(STDIN));
echo "Selamat Anda Berhasil Login!. \n";;
echo "Selamat datang anda telah berhasil login di Aplikasi Bangun Ruang CLI. \n";
echo  "Silahkan Pilih salah satu bangun ruang: . \n";
$nomor = new BangunRuang();
echo "Pilih nomor bangun ruang : ";
$nomor = trim(fgets(STDIN));
echo "Bangun ruang = $nomor";
?>