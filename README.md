# Simple-Laravel-App
## Deskripsi
Aplikasi Laravel ini menampilkan kemampuan untuk menangani:
- Authentication (Login) - Menggunakan JWT untuk autentikasi.
- CRUD Process - Menyediakan operasi dasar seperti Create, Read, Update, dan Delete pada resource.
- Data Search + Input Validation - Validasi data dan fitur pencarian.
- Data Pagination - Menampilkan data dengan pagination.
## Fitur
- Autentikasi dengan JWT: Menggunakan token JWT untuk mengakses API.
- CRUD (Create, Read, Update, Delete): API memungkinkan operasi CRUD pada resource (misalnya, Post).
- Validasi Data: Setiap input divalidasi menggunakan aturan Laravel.
- Pencarian Data: Memungkinkan pencarian data berdasarkan query parameter.
- Pagination: Menampilkan data dalam halaman yang terpisah menggunakan pagination.
## Prasyarat
Sebelum memulai, pastikan Anda memiliki hal-hal berikut terinstal:
- PHP 8.x+
- Composer
- MySQL atau database lainnya yang kompatibel
## Instalasi
- Clone repositori ini ke komputer Anda.
    ```language
    git clone https://github.com/NathasyaLP/Simple-Laravel-App.git
    ```
- Install Dependencies
  Setelah clone repositori, masuk ke direktori project dan install dependencies menggunakan Composer:
  ```language
  cd repository-name
  composer install
  ```
- Konfigurasi File .env
  Salin file .env.example ke .env dan lakukan pengaturan konfigurasi sesuai dengan kebutuhan Anda, seperti database dan JWT secret key.
  ```language
    cp .env.example .env
    ```
- Generate JWT Secret Key
  Jalankan perintah berikut untuk menghasilkan JWT secret key:
  ```language
    php artisan jwt:secret
    ```
- Setup Database
  Buat database di MySQL dan update pengaturan database di file .env Anda. Kemudian jalankan migrasi dan seeding (jika ada):
  ```language
    php artisan migrate --seed
  ```
- Jalankan Aplikasi
