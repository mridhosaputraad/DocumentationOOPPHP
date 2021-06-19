<?php 
/* INHERITANCE (Bagian 1)

-> Definisi
    < Inheritance/pewarisan merupakan konsep yang ada di oop
    < yang nantinya akan menciptakan hierarki antar kelas (Parent & Child)
    < Child Class, mewarisi semua properti dan method parent-nya (yang visible)
    < Child Class. memperluas (extends) fungsionalitas dari parent-nya

FYI
< Fungsi over riding
    > dimana kita bisa menggunakan fungsi dengan nama yang sama tapi punyanya class parent
*/
// Contoh kasus inheritance
    class Mobil {
        public $nama, $merk, $warna,
        $kecepatanMaksimal,
        $jumlahPenumpang;

        public function tambahKecepatan() {
            return "Kecepatan bertambah!";
        }
    }

    /* > Cara bikin child class-nya */
    class MobilSport extends Mobil {
        public $turbo = false;

        public function jalankanTurbo() {
            $this->turbo = true;
            return "Turbo dijalankan!";
        }
    }

    /* > Kalo di instansiasi */
    $mobil1 = new MobilSport();
    echo $mobil1->tambahKecepatan();
    echo "<br>";
    echo $mobil1->jalankanTurbo();
?>