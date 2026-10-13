# LaraPress - Laporan Praktikum PBW Pertemuan 3

**Judul Praktikum:** Instalasi, Konfigurasi, dan Halaman Pertama Laravel
**Nama:** (isi nama)
**NIM:** (isi NIM)
**Kelas:** (isi kelas)
**Framework:** Laravel 12 / PHP >= 8.2

---

## 1. Tujuan

Membuat proyek Laravel "LaraPress" yang berjalan dengan tiga halaman statis (Home, Tentang Kami, Kontak) yang saling terhubung, serta memahami alur Request -> Route -> View -> Response.

## 2. Langkah Pengerjaan

### 2.1 Instalasi Proyek

```bash
cd C:\xampp\htdocs
composer create-project laravel/laravel:"^12.0" LaraPress
cd LaraPress
```

![Instalasi proyek](https://github.com/user-attachments/assets/505db38e-f5ca-4a54-aed3-5e0f6ea4ad95)


### 2.2 Menjalankan Server Development

```bash
php artisan serve
```

![Server berjalan](https://github.com/user-attachments/assets/7aea454f-c721-4fb5-93c6-ddfee2b7bf6c)

Halaman default Laravel di `http://127.0.0.1:8000`:

![Halaman default Laravel](https://github.com/user-attachments/assets/7abf9105-6ea7-4add-b5ba-987e14714c64)

### 2.3 Halaman Utama (Home)

Route di `routes/web.php`:

```php
Route::get('/', function () {
    return view('welcome');
});
```

View: `resources/views/welcome.blade.php`

![Halaman default Laravel](https://github.com/user-attachments/assets/7abf9105-6ea7-4add-b5ba-987e14714c64)

### 2.4 Halaman Tentang Kami

Route:

```php
Route::get('/tentang-kami', function () {
    return view('about');
});
```

View: `resources/views/about.blade.php`

![Halaman Tentang Kami](https://github.com/user-attachments/assets/1055cdd4-6d7e-46dd-895d-fb3bac637adc)

## 3. Tugas Mandiri: Halaman Kontak

Route:

```php
Route::get('/kontak', function () {
    return view('contact');
});
```

View: `resources/views/contact.blade.php` berisi email, telepon, dan alamat fiktif. Link navigasi ke dan dari halaman Kontak ditambahkan di ketiga halaman.

![Halaman Kontak](https://github.com/user-attachments/assets/c7ef63d6-1a60-48ab-a138-a4493af26d65)

## 4. Alur Kerja Laravel

1. **Request:** browser membuka URL, misalnya `/kontak`.
2. **Route:** `routes/web.php` mencocokkan URL dengan rute yang terdaftar.
3. **View:** rute memanggil view Blade (`contact.blade.php`).
4. **Response:** Laravel merender HTML dan mengirimkannya ke browser (status 200 OK).

## 5. Kesimpulan

Proyek Laravel 12 berhasil diinstal dan dijalankan. Tiga halaman statis berhasil dibuat dengan mendefinisikan Route dan View, dan seluruh halaman dapat diakses serta saling terhubung melalui link navigasi.

## 6. Struktur File yang Diubah

```
LaraPress/
├── routes/web.php
├── resources/views/welcome.blade.php
├── resources/views/about.blade.php
├── resources/views/contact.blade.php
└── screenshots/
```
