<?php 
// /* Dengan cara require */
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';


/* Dengan autoload */
// function autoload( $class ) {

// }
// spl_autoload_register(autoload());

/* Atau dengan closure */
spl_autoload_register(function( $class ) {
    require_once __DIR__ .'/Produk/' . $class . '.php';
});