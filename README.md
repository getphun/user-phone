# user-phone

Adalah penyedia tabel `user_phone` yang menyimpan informasi daftar nomor telepon
user. Modul ini adalah modul statik yang artinya modul ini tidak melakukan apapun
kecuali menyediakan tabel.

Tabel `user_phone` di partisi secara default menjadi 50 partisi dengan key `user`.
yang artinya proses dengan tabel akan lebih cepat jika menggunakan kondisi where
dengan field `user`.

```php
// Lebih Lambat
\UserPhone\Model\UserPhone::get(1);
\UserPhone\Model\UserPhone::get(['number' => '0251-627019']);

// Lebih cepat
\UserPhone\Model\UserPhone::get(['id' => 1, 'user' => 2]);
\UserPhone\Model\UserPhone::get(['number' => '0251-627019', 'user'=>1]);
```