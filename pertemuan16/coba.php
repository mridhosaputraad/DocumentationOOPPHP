<?php 
/* AUTOLOADING

-> Apa itu autoloading?
    < proses pemanggilan class (file) tanpa harus menggunakan fungsi require jadi secara otomatis.
    < Karena nantinya pada saat membuat sebuah aplikasi menggunakan konsep object oriented, itu biasanya 1 class ditulis dalam 1 file.

-> Fungsinya disebut
    < spl_autoload_register();
        > spl = standard php library

FYI
> Perbedaan dari require dan require_once apa?
    > require_once hanya bisa memanggil file 1 kali,
      require bisa memanggil file yang sama berkali-kali
      contoh:
        require_once 'tes.php';
        require_once 'tes.php';
        >> error

        require_once 'tes.php';
        require_once 'tes.php';
        >> aman

> Kenapa kita harus panggil file lebih dari satu kali? bukannya 1 kali panggil sudah bisa di akses oleh semua syntax?
    > bisa digunakan misalnya saat mau menampilkan template, jadi isi file yang di-nya bukan logic program melainkan tampilan
    > tapi memang penggunaannya jarang, kebanyakan kasus cukup menggunakan require_once saja
*/
?>