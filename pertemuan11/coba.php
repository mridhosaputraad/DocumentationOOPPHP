<?php 
/* STATIC KEYWORD

-> Untuk apa static keyword?
    < Seperti yang diketahui, member(property & method) itu terikatnya dengan class, bukan dengan object
    < Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
    < Membuat kode seolah-olah menjadi 'procedural' karena kita bisa langsung memanggil property dan method melalui class-nya tanpa instansiasi
    < Ini nantinya digunakan untuk membuat fungsi bantuan/helper karena tidak usah melakukan instansiasi langsung saja panggil property atau methodnya
    < static juga biasanya digunakan di class-class utility pada framework

FYI
-> Yang dimaksudkan biasanya digunakan untuk fungsi bantuan itu seperti apa?
    > seperti operasional. Mau di pakai atau tidak karena tanpa buat object bisa jadi fungsi bantuan
*/

// Refresh kasus
/* Membuat Class */
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

/* Membuat instansiasi ke dalam Object */
$avanza = new Mobil();

// Kasus lain
class Mahasiswa { // Ini Class
    private $nama, $umur, $ipk;

    public function __construct( $nama, $umur, $ipk ) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->ipk = $ipk;
    }

    public function getNama() {
        return $this->nama;
    }
}

$mhs1 = new Mahasiswa('Muhammad', 20, 3.5); // Ini Object

echo $mhs1->getNama();
echo "<br>";

// Jadi, class merupakan template dari object
// Tapi, kita bisa mengakses property dan method dalam konteks class menggunakan static keyword

/* Cara membuatnya */
class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

/* Cara mengaksesnya */
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";

/* Bahkan kita bisa membuatnya tanpa keyword static menggunakan konsep oop biasa */
class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali <br>.";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
// ini sifat nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
?>