<?php 
/* ABSTRACT CLASS (Bagian II)

-> Definisi Konsep
    < Sebuah kelas yang tidak dapat di-instansiasi. Jadi kita tidak bisa bikin object dari kelas abstract ini. Cara supaya bisa di-instansiasi melalui kelas turunannya
    < disebut kelas 'abstrak', karena tidak dapat di-instansiasi. Yang nanti akan menjadi kelas sesungguhnya adalah kelas-kelas turunan
    < kelas abstrak ini akan mendefinisikan interface untuk kelas lain yang menjadi turunannya
    < berperan sebagai 'kerangka dasar' untuk kelas turunannya
    < Memiliki minimal 1 method abstrak yang nanti akan dianggap sebagai interface atau kerangka dari method yang akan kita buat di kelas kelas turunannya
    < kelas abstrak ini erat kaitannya dengan inheritance. Digunakan dalam 'pewarisan'/inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turunannya
        > analoginya jadi didalam kelas abstrak nanti kita punya sebuah method abstrak yang hanya interface/namanya saja tidak ada isinya.
        > Isinya nanti, kita tuliskan di kelas-kelas turunannya dengan menggunakan method yang namanya sama
    < Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
    < Kelas abstrak boleh memiliki property / method reguler yang public, protected, maupun private ataupun
    < Kelas abstrak boleh memiliki property/static method tapi minimal harus ada satu method abstrak

-> Contoh Kelas Abstrak
    < class Mobil Extends Kendaraan
    < class Laptop Extends Komputer
    < class Email Extends Komunikasi
    < ... 

    > Kendaraan, komputer, dan komunikasi bisa kita jadikan sebagai kelas abstrak

-> Kenapa menggunakan kelas abstrak?
    < Merepresentasikan ide atau konsep dasar yang nantinya akan diimplementasikan di kelas-kelas turunannya. Dan yang harus dipahami, penggunaan kelas abstrak ini bukan masalah benar dan salah. Tapi adalah keputusan design/perancangan dari kelas. Kalo mau menerapkan benar-benar object oriented kenapa tidak menggunakan konsep kelas abstrak ini
    < Ada sebuah konsep didalam object oriented yang disebut 'Composition over inheritance'. Jadi, sebaiknya kita melakukan komposisi dibanding melakukan inheritance. Sebetulnya tanpa menggunakan kelas abstrakpun bisa hanya menggunakan inheritance saja. Komposisi disini maksudnya nanti kita menggunakan abstraksi atau interface
    < Dengan melakukan komposisi ini merupakan salah satu cara nantinya kita menerapkan konsep object oriented  yang namanya Polimorphism. Ini konsep oo yang lebih kompleks lagi
    < Melakukan abstraksi itu kita lakukan sentralisasi logic dan
    < mempermudah pengerjaan tim
    < Dengan menggunakan kelas abstrak, kita membuat sebuah kelas yang disebut dengan 'Based Class'/kelas utama. Nanti didalam kelas itu, kita tulis beberapa method abstrak. Sehingga nanti kalo misalkan ada rekan tim akan membuat turunan/sub class-nya, mereka sudah tau bahwa didalam kelas turunannya itu wajib ada sebuah method sebagai implementasi dari method abstrak abstraknya
*/

// Contoh kasusnya
/* Langkah 1.3: Membuat kelas abstrak */
abstract class Buah { // Ini disebut kelas abstrak
    private $warna;

    abstract public function makan();
    /* > ini disebut method abstract
       > hanya interface-nya saja
       > implementasinya, ada di kelas turunanya
    */

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

/* Langkah 1.1 */
class Buah {
    private $warna;

    public function makan() {
        // kunyah
        // nyam..nyam..nyam
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

/* Langkah 1.2 */
class Apel extends Buah {
    public function makan() {
        // kunyah
        // sampai bagian tengah
    }
}

class Jeruk extends Buah {
    public function makan() {
        // kupas
        // kunyah
    }
}

/*
// Kalo misalkan di kasih apel
$apel = new Apel();
$apel->makan();
// rasanya pasti apel. Kalo ini tidak masalah karena buahnya rasa apel

// sekarang di kasih buah
$buah = new Buah();
$buah->makan();
// pertanyaan buahnya rasa apa? nah jadi sepertinya Buah ini bukan merupakan sebuah kelas yang akan kita instansiasi. Kalo ada kasus seperti ini, kita bisa menerapkan konsep abstrak
*/




?>