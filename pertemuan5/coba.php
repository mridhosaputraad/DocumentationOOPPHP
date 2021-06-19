<?php 
/* OBJECT TYPE

-> Object sebagai salah satu type data yang bisa digunakan pada class

FYI
> Seperti yang diketahui, ada type data primitif seperti integer, string, boolean, array

> ada kaitannya dengan "(Request $request)" pada laravel

> Kenapa fungsionalitas cetaknya tidak dimasukkan ke method produk? kenapa harus dibuatkan class sendiri?
    > menurut theori SOLID: setiap class sebaiknya bertanggung jawab dengan 1 tugas. Jika tugas berlebih, akan terjadi saling ketergantungan antar kelas dan itu sebaiknya dihindari

> Kenapa pakai object $produk di method cetak bukannya object yang ada yaitu $produk1 dan $produk2?
    > Karena parameter pada fungsi cetak merupakan variabel yang merepresentasikan objek, yaitu $produk1 dan $produk2
    > tujuannya agar ketika fungsi cetak dipanggil maka dapat diisi dengan parameter berupa kedua object tsb

> Class itu harus unik tidak bisa sama?
    > bisa sama asal pakai namespace

*/
?>