<?php 
/* SETTER & GETTER (Accessor Method)

-> Konsep ini erat kaitannya dengan visibility :
    1. public, dapat digunakan di mana saja, bahkan di luar kelas
    2. protected, hanya dapat digunakan di dalam sebuah kelas beserta turunannya
    3. private, hanya dapat digunakan di dalam sebuah kelas tertentu saja
    
    < kenapa erat kaitannya? karena kita menggunakan setter & getter ini untuk menghindari ketika membuat sebuah property dengan visibility public.
    < Karena sebaiknya kita tidak membiarkan bagian dari luar kelas kita bisa mengakses property secara langsung
    < Untuk itu kita harus ubah visibilitynya menjadi protected atau private tergantung dari design kita
    < Untuk bisa membaca atau mengubah isi dari property membutuhkan method setter & getter

FYI
> kenapa kita harus menggunakan setter & getter ini?
    > supaya kita bisa melakukan sesuatu di dalam function-nya misalnya mau melakukan validasi yang boleh di input hanya string saja

> setter & getter di dalam php kita bisa menggunakan magic method:
    > __set()
    > __get()
*/
?>