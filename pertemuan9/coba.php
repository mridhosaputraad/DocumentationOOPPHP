<?php 
/* VISIBILITY (Access Modifier)

-> Definisi Konsep
    < Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek/class
    < Ada 3 keyword visibilty:
        1. public
            artinya property dan methodnya dapat digunakan atau diakses di mana saja, bahkan di luar kelas itu sendiri

        2. protected
            artinya property dan methodnya hanya dapat digunakan di dalam sebuah kelas beserta turunannya. Maksudnya, kalo misal punya kelas yang punya inheritance. Maka kedua kelas tsb bisa menggunakan property atau method dengan visibility protected

        3. private
            ini yang paling tertutup, karena property dan methodny hanya dapat digunakan di dalam sebuah kelas tertentu saja

-> Kenapa kita membutuhkan acess modifier?
    < Hanya memperlihatkan aspek dari class yang dibutuhkan oleh 'client'
    < Menentukan kebutuhan yang jelas untuk object
    < Memberikan kendali pada kode untuk menghindari 'bug'

FYI
> Visibility itu berarti sama arti dengan enkapsulasi?
    > enkapsulasi itu cara kita untuk membungkus data(property) dan perilaku (method) menjadi sebuah kesatuan
    > salah satu cara untuk melakukan itu adalah dengan menentukan visibility dari data dan perilaku tsb
*/
?>