<?php 
/* PROPERTY & METHOD

-> Definisi Propery
    < Sesuatu yang merepresentasikan data/keadaan dari sebuah object
    < bisa juga disebut sebuah variabel yang ada di dalam object (member variable)
    < cara membuatnya sama seperti di dalam PHP, ditambah dengan visibility di depannya. Ada 3 yang bisa dipilih, yakni:
        > public
        > privat
        > protected

-> Definisi Method
    < merepresentasikan perilaku dari sebuah object
    < istilah lainnya, method adalah function yang ada di dalam object
    < cara membuatnya sama seperti function di dalam PHP, ditambah dengan visibilty di depannya. Walaupun di dalam method ini boleh tidak menggunakan visibilty tapi akan di asumsikan visibility/akses modifiernya bersifat publik

-> Contoh kasusnya pada mobil
    < Property
        > nama
        > merk
        > warna
        > kecepatanMaksimal
        > jumlahPenumpang

    < Method
        > tambahKecepatan
        > kurangiKecepatan
        > gantiTransmisi
        > belokKiri
        > belokKanan

    < Kesimpulannya property adalah datanya. Method adalah perilakunya.

FYI
> visibilty itu penting supaya tidak bisa sembarangan menambah dan mengubah property yang ada
> $this gunanya untuk mengambil isi dari property yang ada di dalam class yang bersangkutan ketika dibuat instans-nya 
*/
// Implementasinya
    class Mobil {
        public $nama,
               $merk,
               $warna,
               $kecepatanMaksimal,
               $jumlahPenumpang;

        public function tambahKecepatan() {

        }

        public function kurangiKecepatan() {

        }

        public function gantiTransmisi() {

        }
    }
?>