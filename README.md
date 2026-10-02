# TugasWeb-P11-EcommerceAuth

## Deskripsi

Project ini merupakan Tugas Rutin 11 pada mata kuliah Pemrograman Web.

Project menggunakan Laravel untuk membuat dasar aplikasi E-Commerce dengan database, Eloquent ORM, autentikasi, multi-role, middleware, dan authorization menggunakan Policy.

## Fitur

* Database E-Commerce dengan 7 tabel
* Relasi antar tabel menggunakan Foreign Key
* Seeder dan Factory
* 50 data produk
* Eloquent Model dan Relationship
* Scope `available()` pada Product
* Query menggunakan Laravel Tinker
* Login dan Register menggunakan Laravel Breeze
* Logout
* Multi-role: admin, editor, dan user
* Custom Role Middleware
* PostPolicy untuk edit/update dan delete
* Route protection berdasarkan role
* CRUD Post dari project sebelumnya

## Struktur Database

Database menggunakan tabel:

1. users
2. categories
3. products
4. addresses
5. orders
6. order_items
7. payments

Beberapa relasi yang digunakan:

* Category memiliki banyak Product
* Product dimiliki oleh Category
* User memiliki banyak Address
* User memiliki banyak Order
* Order memiliki banyak OrderItem
* Order memiliki satu Payment
* OrderItem dimiliki oleh Product

## Seeder dan Factory

Seeder membuat beberapa kategori produk dan akun dengan role:

* Admin
* Editor
* User

Product Factory digunakan untuk membuat 50 data produk dengan data seperti nama, harga, stok, deskripsi, kategori, dan status aktif.

## Authentication dan Authorization

Authentication menggunakan Laravel Breeze dengan fitur:

* Login
* Register
* Logout

Project juga menggunakan tiga role:

* `admin`
* `editor`
* `user`

Custom middleware digunakan untuk membatasi akses berdasarkan role.

Contoh:

* `/admin` hanya dapat diakses oleh admin
* `/editor` hanya dapat diakses oleh editor
* `/user` hanya dapat diakses oleh user

## PostPolicy

PostPolicy digunakan untuk mengatur hak akses terhadap post.

Role `admin` dan `editor` dapat:

* Mengedit/update post
* Menghapus post

Role `user` tidak dapat:

* Mengedit/update post
* Menghapus post

Pengujian melalui Laravel Tinker menunjukkan hasil sesuai dengan aturan tersebut.

## Teknologi

* Laravel
* PHP
* MySQL
* Blade
* Laravel Breeze
* Eloquent ORM
* HTML
* CSS

## Cara Menjalankan

1. Clone repository.
2. Masuk ke folder project.
3. Jalankan:

```bash
composer install
```

4. Buat database MySQL.
5. Atur konfigurasi database pada file `.env`.
6. Jalankan migration:

```bash
php artisan migrate
```

7. Jalankan seeder:

```bash
php artisan db:seed
```

8. Jalankan server Laravel:

```bash
php artisan serve
```

9. Buka:

```text
http://127.0.0.1:8000
```

## Akun Pengujian

### Admin

Email: `admin@example.com`

Role: `admin`

### Editor

Email: `editor@example.com`

Password: `password123`

Role: `editor`

### User

Email: `user@example.com`

Role: `user`
