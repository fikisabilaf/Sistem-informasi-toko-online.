<h1 align="center">Selamat datang di Toko Online! 👋</h1>

## Apa itu Toko Online?

Web Toko Online yang diclone dari https://github.com/adhiariyadi/Toko-Online-Laravel  **Toko Online adalah Website penjualan secara online untuk seseorang yang inggin membeli suatu produk melalui website dengan mudah.**

## Fitur apa saja yang tersedia di Toko Online?

-   Autentikasi Admin
-   User & CRUD
-   Merek & CRUD
-   Mobil & CRUD
-   Order & CRUD
-   Dan lain-lain

## Release Date

**Release date : 27 Novemberv 2023**

> Toko Online merupakan project open source yang dibuat oleh fiki sabila firdaus yang diclone dari adhi aryadi . Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/adhiariyadi/Toko-Online-Laravel.git
cd Toko-Online-Laravel
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Author

-   Facebook : <a href="https://web.facebook.com/adhiariyadi.me/"> Adhi Ariyadi</a>
-   LinkedIn : <a href="https://www.linkedin.com/in/adhiariyadi/"> Adhi Ariyadi</a>

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

-   Copyright © 2020 Adhi Ariyadi.
-   **Toko Online is open-sourced software licensed under the MIT license.**
