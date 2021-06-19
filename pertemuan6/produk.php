<?php 
// Jualan Produk
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga,
               /* Langkah 1.2: Menambah Property */
               $jmlHalaman,
               $waktuMain,
               $tipe;

        /* Langkah 1.4: Cara biasanya harus membuat parameternya */
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit"; 
        }

        /* Langkah 1.5: Buat method barunya. Ini solusi jika ingin infonya berbeda */
        public function getInfoLengkap() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            if( $this->tipe == "Komik" ) {
                $str .= " - {$this->jmlHalaman} Halaman.";
            } else if( $this->tipe == "Game" ) {
                $str .= " ~ {$this->waktuMain} Jam.";
            }

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
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();


    /* Langkah 1.1: Logic */
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    // Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.


?>