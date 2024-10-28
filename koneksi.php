<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "belajar_oop";
    var $koneksi;
 
    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }
 
    function tampil_data() {
        $hasil = [];
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang");
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }
 
    function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "INSERT INTO tb_barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama_barang', '$stok', '$harga_beli', '$harga_jual')";
        mysqli_query($this->koneksi, $query);
    }
 
    function tampil_edit_data($id_barang) {
        $hasil = [];
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
        if ($data) {
            while ($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
        }
        return $hasil;
    }
 
    function edit_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id_barang='$id_barang'";
        mysqli_query($this->koneksi, $query);
    }
 
    function delete_data($id_barang) {
        $query = "DELETE FROM tb_barang WHERE id_barang='$id_barang'";
        mysqli_query($this->koneksi, $query);
    }
 
    function cari_data($nama_barang) {
        $hasil = [];
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE nama_barang='$nama_barang'");
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }
}
?>
 