# jobsurfer

Aplikasi ini digunakan untuk mencari kerja. Aplikasi ini dibuat sebagai pemenuhan mata kuliah Database Design (ISYS6172) dari Universitas Bina Nusantara. Aplikasi ini dibuat oleh 4 mahasiswa Binus, yaitu:

- Giovanni Dejan (2001546883)
- Bryan Karunachandra (2001542153)
- Teguh Wibowo Wijaya (2001545621)
- Vincent Tansol (2001566771)

# Persiapan

### Aplikasi Penunjang

Untuk menjalankan program, diperlukan program tambahan berikut ini:

- Apache web server
- PHP 7.2
- Composer
- MariaDB 10.1

Untuk aplikasi-aplikasi penunjang, ada 3 cara untuk menginstallnya, tergantung OS masing-masing.

##### 1. Windows
Download XAMPP dari https://www.apachefriends.org/download.html. Setelah itu, download & install Composer versi Windows di https://getcomposer.org/Composer-Setup.exe.

##### 2. Mac OS
Instal Homebrew terlebih dahulu, agar dapat menginstall PHP dan lain-lain. Petunjuk instalasi Homebrew ada di https://docs.brew.sh/Installation. Setelah itu, install Composer dengan mengikuti petunjuk pada halaman https://getcomposer.org/download. 
 
##### 3. Linux
Untuk instalasi aplikasi penunjang, instal Apache terlebih dahulu, kemudian baru install PHP 7.2. Sebelum install MySQL / MariaDB, pastikan Apache2 terhubung dengan PHP 7.2 (petunjuk ganti versi PHP ada di [sini](https://thishosting.rocks/install-php-on-ubuntu/#change-version)). Setelah itu, instal MariaDB, kemudian atur MariaDB melalui
```
$ sudo mysql_secure_installation
```

Jangan lupa instal Composer, dengan mengikuti petunjuk di https://getcomposer.org/download.

(Opsional) Instal phpMyAdmin bila diinginkan, dengan cara instal paketnya. Setelah itu, pastikan phpMyAdmin bisa diakses di http://localhost/phpmyadmin. Bila ternyata masih gagal, ikuti petunjuk di [sini](https://askubuntu.com/questions/387062/how-to-solve-the-phpmyadmin-not-found-issue-after-upgrading-php-and-apache) (untuk pengguna distro Ubuntu dan turunannya).

Petunjuk lengkap instalasi aplikasi-aplikasi penunjang untuk Ubuntu 18.04 dan turunannya ada di https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04.

# Instalasi

1. Download ZIP dari [GitHub](https://github.com/iamdejan/jobsurfer) / clone repository.
2. Ekstrak ZIP (bila download ZIP).
3. Buka terminal, kemudian panggil (cd) direktori tempat aplikasi ada. Catatan: untuk pengguna Kali Linux & Linux Mint KDE, Anda bisa buka dari File Explorer masing-masing, kemudian klik kanan dan klik "Open In Terminal."
4. Jalankan perintah ini: `$ composer install && php artisan key generate` & tunggu sampai selesai.
5. Konfigurasikan file .env, ganti beberapa bagian (sesuaikan dengan nama database Anda dan konfigurasi lain seperti port, username, password, dan lain-lain).
6. Import database dari folder [documentation/tahap7-db](https://github.com/iamdejan/jobsurfer/tree/master/documentation/tahap7-db). Ada file jobsurfer.sql, download dan import ke database Anda.
7. Aplikasi siap digunakan.
