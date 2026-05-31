<div align="center">

# 🍽️ Foodly Backend

**REST API Backend untuk aplikasi pemesanan makanan berbasis Laravel**

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Sanctum](https://img.shields.io/badge/Laravel_Sanctum-4.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/sanctum)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)

</div>

---

## 📋 Tentang Proyek

**Foodly Backend** adalah REST API yang dibangun menggunakan [Laravel 12](https://laravel.com) sebagai fondasi backend untuk aplikasi pemesanan makanan **Foodly**. API ini menyediakan layanan autentikasi, manajemen data makanan, dan fitur-fitur inti lainnya yang dikonsumsi oleh aplikasi klien (mobile/web).

Autentikasi dikelola menggunakan **Laravel Sanctum**, memastikan setiap request API aman dan terverifikasi.

---

## ✨ Fitur Utama

- 🔐 **Autentikasi** – Login, register, dan logout via token menggunakan Laravel Sanctum
- 🍕 **Manajemen Menu** – CRUD data makanan dan kategori
- 📦 **Manajemen Pesanan** – Pemrosesan dan pelacakan status pesanan
- 🧪 **Testing** – Unit & feature testing menggunakan PestPHP
- 🗄️ **Database Migration** – Skema database terstruktur dengan migration dan seeder

---

## 🛠️ Tech Stack

| Teknologi | Versi | Fungsi |
|-----------|-------|--------|
| PHP | ^8.2 | Bahasa pemrograman utama |
| Laravel | ^12.0 | Framework backend |
| Laravel Sanctum | ^4.0 | Autentikasi API berbasis token |
| PestPHP | ^4.4 | Framework testing |
| Vite | latest | Asset bundler |

---

## 📦 Prasyarat

Sebelum menjalankan proyek ini, pastikan kamu sudah menginstal:

- **PHP** >= 8.2
- **Composer** >= 2.x
- **Node.js** >= 18.x & **npm**
- **MySQL** / **PostgreSQL** / **SQLite**

---

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/ZuckWave/foodly-backend.git
cd foodly-backend
```

### 2. Setup Otomatis (Direkomendasikan)

Proyek ini menyediakan script setup otomatis:

```bash
composer run setup
```

Script ini akan secara otomatis:
- Menginstal semua dependency PHP (`composer install`)
- Menyalin `.env.example` ke `.env`
- Generate application key
- Menjalankan database migration
- Menginstal dependency Node.js (`npm install`)
- Build asset frontend (`npm run build`)

### 3. Setup Manual (Opsional)

Jika ingin melakukan setup secara manual, ikuti langkah berikut:

```bash
# Install dependency PHP
composer install

# Salin file environment
cp .env.example .env

# Generate application key
php artisan key:generate

# Konfigurasi database di file .env, lalu jalankan migration
php artisan migrate

# Install dependency Node & build asset
npm install
npm run build
```

---

## ⚙️ Konfigurasi Environment

Edit file `.env` dan sesuaikan konfigurasi berikut:

```env
APP_NAME=Foodly
APP_ENV=local
APP_KEY=          # Auto-generated
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=foodly
DB_USERNAME=root
DB_PASSWORD=

# Sanctum
SANCTUM_STATEFUL_DOMAINS=localhost,127.0.0.1
```

---

## ▶️ Menjalankan Aplikasi

### Development Mode

Jalankan semua service sekaligus (server, queue, dan Vite):

```bash
composer run dev
```

Atau jalankan hanya server Laravel:

```bash
php artisan serve
```

API akan tersedia di: `http://localhost:8000`

---

## 🧪 Testing

```bash
# Jalankan semua test
composer run test

# Atau langsung via artisan
php artisan test

# Jalankan dengan coverage
php artisan test --coverage
```

---

## 📁 Struktur Proyek

```
foodly-backend/
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Controller API
│   │   └── Middleware/     # Middleware kustom
│   └── Models/             # Eloquent Models
├── bootstrap/              # Bootstrap aplikasi
├── config/                 # Konfigurasi aplikasi
├── database/
│   ├── factories/          # Model factories untuk testing
│   ├── migrations/         # Skema database
│   └── seeders/            # Data awal database
├── public/                 # Entry point & asset publik
├── resources/              # Views & raw assets
├── routes/
│   ├── api.php             # Definisi route API
│   └── web.php             # Definisi route web
├── storage/                # File yang di-generate aplikasi
├── tests/                  # Unit & feature tests
├── .env.example            # Template environment
└── composer.json           # Dependency PHP
```

---

## 📡 API Endpoints

> Base URL: `http://localhost:8000/api`

Autentikasi menggunakan **Bearer Token** via Laravel Sanctum. Sertakan header berikut pada setiap request yang memerlukan autentikasi:

```
Authorization: Bearer {your_token}
```

_Dokumentasi lengkap endpoint API akan segera ditambahkan._

---

## 🤝 Kontribusi

Kontribusi sangat welcome! Ikuti langkah berikut:

1. **Fork** repository ini
2. Buat branch fitur baru: `git checkout -b feature/nama-fitur`
3. Commit perubahan: `git commit -m 'feat: menambahkan fitur X'`
4. Push ke branch: `git push origin feature/nama-fitur`
5. Buat **Pull Request**

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

---

<div align="center">

Dibuat dengan ❤️ menggunakan [Laravel](https://laravel.com)

</div>
