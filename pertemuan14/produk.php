<?php 
// Jualan Produk
    /* Langkah 1.1: Membuat class Produk menjadi class abstrak karena keputusanya kita tidak akan menginstansiasi class produk ini */
    abstract class Produk {
        private $judul,
                $penulis,
                $penerbit,
                $harga,
                $diskon = 0;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function setJudul ( $judul ) {
            if( !is_string($judul) ) {
                throw new Exception("Judul harus String");
            }
            $this->judul = $judul;
        }

        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis( $penulis ) {
            $this->penulis = $penulis;
        }

        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenerbit ( $penerbit ) {
            $this->penerbit = $penerbit;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }

        public function setDiskon( $diskon ) {
            $this->diskon = $diskon;
        }

        public function getDiskon() {
            return $this->diskon;
        }

        public function setHarga ( $harga ) {
            $this->harga = $harga;
        }
        
        public function getHarga() {
            return $this->harga - ( $this->harga * $this->diskon / 100 );
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit"; 
        }

        /* Langkah 1.3: Membuat method ini menjadi method abstrak karena di class turunannya ada method dengan nama yang sama */
        abstract public function getInfoProduk(); 
        
        /* Langkah 1.4: Bikin method baru untuk mengambil info dari produk */
        public function getInfo() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }
    } 

    class Komik extends Produk {
        public $jmlHalaman;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->jmlHalaman = $jmlHalaman;
        }

        /* Langkah 1.5: Cara pemanggilannya. Ini bisa di kembangkan ke AI/Machine Learning */
        public function getInfoProduk() {
            $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
            /* Kenapa pake this dan tidak pake parent? karena ketika kita manggil this->, dia kan nyari method itu ada atau tidak di class itu. Kalau tidak ada, dia naik nyari ke class parent. Sebelumnya kita pakai parent::, karena methodnya itu overriding dengan yang di child classnya. */
            
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
            $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    /* Kita manfaatkan class ini untuk mencetak banyak produk sekaligus */
    class CetakInfoProduk {
        public $daftarProduk = array();

        /* Cara Menambahkan produk-produknya ke dalam array daftarProduk dengan membuat method baru */
        public function tambahProduk( Produk $produk ) {
            $this->daftarProduk[] = $produk;
        }

        /* Untuk mencetaknya */
        public function cetak( ) {
            $str = "DAFTAR PRODUK : <br>";

            foreach( $this->daftarProduk as $p ) {
                $str .="- {$p->getInfoProduk()} <br>";
            }

            return $str;
        }
    }

    // /* Langkah 1.2: kalo misal kita instansiasi class produknya maka akan error */
    // $produk = new Produk();

    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

    /* Cara buat untuk instans CetakInfoProduk */
    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk( $produk1 );  
    $cetakProduk->tambahProduk( $produk2 ); 
    echo $cetakProduk->cetak();

/* NOTE:
> nama function getInfoProduk yang ada di child class si Komik dan Game... 
> Itu namanya disamakan dengan nama function getInfoProduk (abstract) yang ada di parent class (abstract)...
> disini nih sebenarnya kunci utamanya... 
> kalo seandainya nama function getInfoProduk yang di child class komik dan Game diganti nama yang ga manggil abstract method si parent class (abstract), maka ga habis pikir dah logicnya berantakan kemana-mana saya...
> Ini kata si xampp nya: Fatal error: Class Komik contains 1 abstract method and must therefore be declared abstract or implement the remaining methods

> intinya: dimana ada class abstract = maka harus ada method abstract ... yang ... dimana KALO mau dipake class abstract si parentnya melalui pembuatan method di child class tsb
> caranya penamaan method pada child class ini harus disamakan dengan nama method abstract punyanya si parent
> tapi ini bukan overiding loh ya, karena ini semacam nge instance gitu lah modelnya tapi melalui child class

> oh iya kalo misalnya pake class abstract berarti harus bikin method abstract dan tidak boleh bikin anak kalo anaknya ga ada ngisi method abstract parentnya
*/
?>