<?php 
/* CONSTANT

-> Definisi
    < sebuah identifier untuk menyimpan nilai
    < nilai-nya tidak dapat berubah ketika di set di dalam program

-> Di dalam php ada dua cara untuk membuat constanta:
    1. define()
    2. const

    > Bedanya menggunakan kedua const ini adalah ketika mau ngodingnya menggunakan konsep object oriented. 
        > Menggunakan define ini tidak bisa simpan ke dalam sebuah class. Jadi define ini harus disimpan diluar sebagai constanta global
        > Sedangkan const ini bisa kita masukkan ke dalam class sehinggan bisa digunakan didalam konsep object oriented

-> Didalam php juga ada yang namanya Magic Constant
    < __LINE__
        > akan menampilkan baris dimana const ini ditulis
    < __FILE__
        > akan menampilkan alamat dari file yang bersangkutan. Ini bisa dirangkai misalnya menjadi pesan kesalahan ada error di file mana baris ke berapa
    < __DIR__
        > untuk mengetahui direktori dari file bersangkutan
    < __FUNCTION__
        > untuk menentukan kita lagi di function apa
    < __CLASS__
        > > untuk menentukan kita lagi di class apa
    < __TRAIT__
    < __METHOD__
    < __NAMESPACE__
*/
// Menggunakan define(NAME, value)
define('NAMA', 'Muhammad Ridho');
echo NAMA;
echo "<br>";

// Menggunakan keyword const
const UMUR = 20;
echo UMUR;


// Contoh 
class Coba {
    // define('NAMA', 'Muhammad Ridho'); /* Ini akan error */
    const NAMA = 'Muhammad';
}

/* Cara mengaksesnya */
echo Coba::NAMA;



// Penggunaan Magic Constant
echo __FILE__;

function coba() {
    return __FUNCTION__;
}
echo coba();

class Coba1 {
    public $kelas = __CLASS__;
}
$obj = new Coba1;
echo $obj->kelas;

/* Bisa juga */
class Coba2 {
    public function getClass() {
        return __CLASS__;
    }
}
?>