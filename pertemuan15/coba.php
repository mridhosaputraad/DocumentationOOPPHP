<?php 
/* INTERFACE

-> Definisi Konsep
    < merupakan Kelas Abstrak yang sama sekali tidak memiliki implementasi
    < bisa disebut juga Kelas Murni merupakan template untuk kelas turunannya
    < Tidak boleh memiliki property, hanya deklarasi method saja
    < Semua method harus dideklarasikan dengan visibilty public
    < Boleh mendeklarasikan __construct() didalam interface untuk mewajibkan kelas turunannya punya method construct juga
    < Satu kelas turunannya boleh mengimplementasikan banyak interface
    < Dengan menggunakan type-hinting dapat melakukan 'Dependency Injection'
    < Pada akhirnya dengan kita melakukan abstraksi atau interface ini kita akan mencapai Polymorphism


FYI
> type-hinting sudah dibahas di object type dimana sebuah object bisa kita jadikan sebagai parameter yaitu disebutnya type-hinting
> Dependency Injection ini jadi kita memaksakan sebuah method untuk menerima parameternya adalah object type-hinting ini
*/

// Cara menggunakan interface
interface Buah {
    public function makan();
    public function setWarna($warna);
}

interface Benda {
    public function setUkuran($ukuran);
}

// Bila di implementasikan
class Apel implements Buah, Benda {
    protected $warna;
    protected $ukuran;

    public function makan() {
        // Kunyah
        // Sampai bagian tengah
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }
}

class Jeruk implements Buah {
    protected $warna;

    public function makan() {
        // kupas
        // kunyah
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}
?>