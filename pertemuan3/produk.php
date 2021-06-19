<?php 
// Jualan Produk
    class Produk {
        /* Langkah 1.1: Menuliskan property di dalam object/class */
        public $judul = "judul",
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0;

        // /* Langkah 2.1: cara membuat method */
        // public function sayHello() {
        //     return "Hello World!";
        // }

        /* Langkah 2.3: membuat method label */
        public function getLabel() {
            return "$this->penulis, $this->penerbit"; /* > variabel scope! tambahkan this */
        }
    }

    // $produk1 = new Produk();
    // /* Langkah 1.2: Menimpa */
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    // /* Langkah 1.3: Menuliskan langsung */
    // $produk2 = new Produk();
    // $produk2->judul = "Uncharted";
    // $produk2->tambahProperty = "hahaha"; /* > ketika menimpa property, namanya harus sama */
    // var_dump($produk2->judul);

    /* Langkah 1.4: satu instansi dengan property lengkap */
    // Komik
    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Masashi Kishimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;
    
    // /* Langkah 1.5: misal membuat label */
    // echo "Komik : $produk3->penulis, $produk3->penerbit";
    // echo "<br>";

    // /* Langkah 2.2: cara menampilkan method */
    // echo $produk3->getLabel();

    // Game
    $produk4 = new Produk();
    $produk4->judul = "Uncharted";
    $produk4->penulis = "Neil Druckmann";
    $produk4->penerbit = "Sony Computer";
    $produk4->harga = 250000;

    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "Game : " . $produk4->getLabel();
 ?>