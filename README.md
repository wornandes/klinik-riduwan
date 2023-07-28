<div style="text-align:center">

# KLINIK RIDUWAN

Web Klinik Riduwan merupakan sistem manajemen rekam medis di Klinik Dokter Praktek Perorangan Riduwan Vidya Wira Pematang Siantar, Sumatera Utara.

</div>

## Requirement

Setidaknya versi saat development ini

-   PHP 8.0
-   Composer 2.4.1
-   Node 18.8.0
-   NPM 8.18

## Cara Instalasi

Install dependency PHP dengan Composer

```
composer install
```

Install dependency JS dengan NPM

```
npm install
```

Copy .env dan sesuaikan config databasenya

```
copy .env.example .env
```

Generate Key

```
php artisan key:generate
```

Migrate dan Seed data default

```
php artisan migrate:fresh --seed
```

(Optional) Seed fake data

```
php artisan db:seed --class FakeDataSeeder
```

## Cara Run Project

Jalankan server

```
php artisan serve
```

## Default Account

Admin

**username** : michel

**password** : admin

Perawat

**username** : emma13

**password** : perawat

Dokter

**username** : Riduwan

**password** : dokter
