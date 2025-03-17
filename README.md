## Deskripsi Project

Ini adalah project sederhana untuk memenuhi tugas dari sesi pelatihan LSP Universitas Pamulang (Unpam), dengan membuat sebuah aplikasi tentang pengadaan barang.

Project ini saya buat menggunakan bahasa pemrograman PHP versi 7.3 dengan framework Laravel versi 8.75, untuk tampilan saya menggunakan framework CSS Bootstrap versi 5, untuk database saya menggunakan postgreSql namun jika ingin menggunakan database lainnya juga bisa karena pada project ini struktur table dan column saya masukkan dalam migration sehingga bisa langsung untuk di generate menggunakan `php artisan migrate`.

## Langkah untuk Installasi

- git clone *[https://github.com/auliya-id/latihan-ujikom-lsp-pengadaan-barang.git](https://github.com/auliya-id/latihan-ujikom-lsp-pengadaan-barang.git)*
- rename file `.env.example` menjadi `.env` dan sesuaikan koneksi databasenya (pastikan database sudah dibuat)
- buka CLI/terminal/command-line dan Change Directory (CD) ke projectnya
- lakukan `composer install`
- lakukan `php artisan key:generate`
- lakukan `php artisan migrate` (pastikan nama database sudah dibuat)
- terakhir untuk menjalankannya lakukan `php artisan serve`
- buka pada browser dengan link `http://127.0.0.1:8000`

## Pengembang

- **Nama** : Muhammad Noval Nur Auliya
- **NIM** : 191011401333
- **Prodi - Fakultas** : Teknik Informatika - Ilmu Komputer
- **LSP GEL.** : 52
- **Web Profil CV** : [http://auliya.id](http://auliya.id)
- **Instagram** : [https://www.instagram.com/noval_auliya](https://www.instagram.com/noval_auliya)
- **Facebook** : [https://www.facebook.com/MuhammadNovalNurAuliya](https://www.facebook.com/MuhammadNovalNurAuliya)
- **X (Twitter)** : [https://x.com/noval_auliya](https://x.com/noval_auliya)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
