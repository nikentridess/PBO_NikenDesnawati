<?php
class Manusia {
    var $nama;
    var $warna;

    // Konstruktor yang benar
    function __construct() {
        echo "Ini adalah isi method construck <br/>";
    }

    // Destruktor
    function __destruct() {
        echo "Ini adalah isi method destruck <br/>";
    }

    // Method untuk menampilkan nama
    function tampilkan_nama() {
        return "Nama saya mahasiswa SI <br/>";
    }
}

// Membuat objek dari kelas Manusia
$manusia = new Manusia();

// Menampilkan nama
echo $manusia->tampilkan_nama();
?>
