<?php 
// Jualan Produk
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga,
               /* Langkah 1.2: Menambah fungsionalitas Property */
               $jmlHalaman,
               $waktuMain;

        /* Langkah 1.4: Cara biasanya harus membuat parameternya */
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit"; 
        }

        /* Langkah 1.5: Buat method barunya. Ini solusi jika ingin infonya berbeda */
        public function getInfoProduk() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    /* Langkah 2.1: Memperbaiki logic sebelumnya dengan pendekatan inheritance */
    class Komik extends Produk {
        public function getInfoProduk() {
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        public function getInfoProduk() {
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
            return $str;
        }
    }

    /* Langkah 1.3: Menambahkan Parameter Baru. Problemnya ini akan dikirimkan ke method construct */
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();


    /* Langkah 1.1: Logic */
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    // Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.


?>