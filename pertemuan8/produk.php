<?php 
// Jualan Produk
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit"; 
        }

        public function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    } // Class produk ini jadinya general. Tidak ada satupun property dan method yang ada hubungannya dengan komik dan game. Spesifiknya, perluasan fungsionalitasnya ada di fungsi class childnya

    class Komik extends Produk {
        /* Langkah 1.2: Membuat variabel special untuk komik */
        public $jmlHalaman;

        /* Langkah 1.3: Kita butuh method construct */
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
            // Jalankan construct parentnya
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk() {
            // $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
            /* Langkah 1.1: Diperbaiki dengan melakukan OVERRIDING */
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        public $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
            return $str;
        }
    }

    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
?>