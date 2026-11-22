# Praktikum Framework Laravel – SI 2A

Repository ini merupakan hasil pengerjaan tugas Praktikum Pemrograman Web menggunakan framework Laravel. Pengerjaan dilakukan secara bertahap dalam satu repository, mulai dari Sistem Templating, CRUD, Migration, Seeder dan Factory, hingga Autentikasi.

## Informasi Praktikum

- **Mata Kuliah:** Pemrograman Web
- **Kelas:** SI 2A
- **Framework:** Laravel 13.40.0
- **PHP:** 8.5.12
- **Composer:** 2.11.2
- **Database:** MySQL
- **Tools:** XAMPP, Visual Studio Code, Git dan GitHub

## Daftar Praktikum

### 1. Sistem Templating (Halaman 12)

Pada bagian ini dilakukan praktikum sistem templating menggunakan Laravel Blade.

Pengerjaan mencakup:
- Membuat dan mengelola halaman menggunakan Blade.
- Menampilkan halaman data mahasiswa.
- Membuat halaman kalkulator segitiga.
- Menggunakan controller untuk mengatur tampilan halaman.

### 2. Membuat CRUD (Halaman 19)

Pada bagian ini dibuat fitur CRUD untuk mengelola data karyawan (*Employe*) menggunakan Laravel dan MySQL.

Fitur yang dikerjakan:

- **Create:** Menambahkan data karyawan.
- **Read:** Menampilkan data karyawan.
- **Update:** Mengedit data karyawan.
- **Delete:** Menghapus data karyawan.

Data karyawan terdiri dari:
- ID
- Nama
- Alamat
- Gender
- Gaji

File yang digunakan antara lain:
- `app/Models/Employe.php`
- `app/Http/Controllers/EmployeController.php`
- `resources/views/tampil_data.blade.php`
- `resources/views/tambah_data.blade.php`
- `resources/views/edit_data.blade.php`

### 3. Migration, Seeder, dan Factory (Halaman 27)

Pada bagian ini dilakukan pengelolaan database menggunakan fitur Migration dan Seeder Laravel.

Pengerjaan mencakup:

- Mengubah migration tabel `users`.
- Membuat struktur kolom pengguna berupa nama, email, password, foto, role, dan timestamps.
- Membuat `UserSeeder` untuk mengisi data pengguna.
- Membuat `EmployeSeeder` untuk mengisi data karyawan.
- Menggunakan Faker untuk menghasilkan data karyawan secara otomatis.
- Mengatur `DatabaseSeeder` agar dapat menjalankan UserSeeder dan EmployeSeeder.

Data karyawan yang dihasilkan menggunakan Faker berjumlah 10 data.

### 4. Membuat Autentikasi (Halaman 33)

Pada bagian ini dibuat sistem login dan logout menggunakan session serta middleware.

Fitur yang dikerjakan:

- Membuat halaman login.
- Melakukan validasi email dan password.
- Memeriksa password menggunakan Hash.
- Menyimpan status login menggunakan session.
- Membuat middleware `IsLogin`.
- Mendaftarkan middleware melalui `bootstrap/app.php`.
- Membuat halaman Dashboard.
- Membuat sidebar navigasi.
- Membatasi akses halaman jika pengguna belum login.
- Mengarahkan pengguna kembali ke halaman login setelah logout.

Halaman yang dilindungi:
- Dashboard
- Mahasiswa
- CRUD Employe
- Kalkulator Segitiga

File utama yang digunakan:
- `app/Http/Controllers/AuthController.php`
- `app/Http/Middleware/IsLogin.php`
- `resources/views/login.blade.php`
- `resources/views/dashboard.blade.php`
- `resources/views/template/sidebar.blade.php`
- `routes/web.php`
- `bootstrap/app.php`

## Struktur Repository

Repository memiliki folder utama `web-app` yang berisi project Laravel.

```text
belajar-laravel-2a/
└── web-app/
    ├── app/
    │   ├── Http/
    │   │   ├── Controllers/
    │   │   │   ├── AuthController.php
    │   │   │   ├── EmployeController.php
    │   │   │   ├── KalkulatorController.php
    │   │   │   └── MahasiswaController.php
    │   │   └── Middleware/
    │   │       └── IsLogin.php
    │   ├── Models/
    │   │   ├── Employe.php
    │   │   └── User.php
    ├── bootstrap/
    │   └── app.php
    ├── database/
    │   ├── migrations/
    │   └── seeders/
    │       ├── DatabaseSeeder.php
    │       ├── EmployeSeeder.php
    │       └── UserSeeder.php
    ├── resources/
    │   └── views/
    │       ├── template/
    │       │   └── sidebar.blade.php
    │       ├── dashboard.blade.php
    │       ├── login.blade.php
    │       ├── tampil_data.blade.php
    │       ├── tambah_data.blade.php
    │       └── edit_data.blade.php
    └── routes/
        └── web.php
```

## Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/anisaalifianurrahmaizzatti-cpu/belajar-laravel-2a.git
```

### 2. Masuk ke Folder Project

```bash
cd belajar-laravel-2a/web-app
```

### 3. Install Dependency

```bash
composer install
```

### 4. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`, kemudian buat application key:

```bash
copy .env.example .env
php artisan key:generate
```

### 5. Konfigurasi Database

Buat database dengan nama `company` melalui phpMyAdmin.

Sesuaikan konfigurasi database di file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=company
DB_USERNAME=root
DB_PASSWORD=
```

Pastikan Apache dan MySQL sudah berjalan melalui XAMPP.

**Catatan:** Tabel `employes` pada praktikum CRUD dibuat secara manual. Tabel tersebut harus tersedia sebelum menjalankan EmployeSeeder.

### 6. Jalankan Migration

```bash
php artisan migrate
```

### 7. Jalankan Seeder

```bash
php artisan db:seed
```

Perintah tersebut menjalankan UserSeeder dan EmployeSeeder melalui DatabaseSeeder.

### 8. Jalankan Server Laravel

```bash
php artisan serve
```

Buka browser:

```text
http://127.0.0.1:8000
```

## Akun Login Praktikum

| Keterangan | Data |
|---|---|
| Email | anisaalifianurrahmaizzatti@gmail.com |
| Password | 123456 |
| Role | admin |

## Riwayat Commit

Setiap materi praktikum disimpan dalam commit terpisah.

| Materi | Commit |
|---|---|
| Halaman 12 – Sistem Templating | `[ADD] fitur Sistem Templating` |
| Halaman 19 – CRUD | `[ADD] fitur Crud` |
| Halaman 27 – Migration, Seeder dan Factory | `[ADD] fitur Migration, Seeder dan Factory` |
| Halaman 33 – Autentikasi | `[ADD] fitur Autentikasi` |

## Repository GitHub

https://github.com/anisaalifianurrahmaizzatti-cpu/belajar-laravel-2a

## Penutup

Praktikum ini dikerjakan secara bertahap dengan menggunakan satu repository GitHub. Setiap materi dikembangkan dan disimpan melalui commit tersendiri sebagai dokumentasi proses pengerjaan tugas Praktikum Pemrograman Web kelas SI 2A.