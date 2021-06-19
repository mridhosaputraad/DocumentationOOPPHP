<?php 
/* CLASS & OBJECT

-> Definisi Class
    > adalah blueprint/template untuk membuat instance dari sebuah object
    > lalu, class mendefinisikan object-nya. object yang telah dibuat itu karena telah didefinsikan oleh class
    > class itu bisa menyimpan data dan perilaku yang disebut dengan property dan method dari object yang nanti akan dibuat

-> Membuat Class
    > Diawali dengan menuliskan keyword class, diikuti nama dibatasi dengan {} untuk menyimpan property dan method
    > Aturan penamaan class sama seperti variabel/function
    > Contoh sintaknya
        class Coba {
            public $a; // property

            // method
            public function b() {

            }
        }

-> Definisi Object
    > instance yang didefinisikan oleh Class
    > banyak object dapat dibuat menggunakan satu class
    > object dibuat dengan menggunakan keyword new
    > Contoh sintaknya
        class Coba {

        }

        // membuat object instance dari class
        $a = new Coba();
        $b = new Coba();
*/

/* Ilustrasi */
        class Coba {

        }

        $a = new Coba();
        $b = new Coba();
        $c = new Coba();

        var_dump($a);
        var_dump($b);
        var_dump($c);


?>