<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## panduan instalasi sql server

windows 10 / 11

- install odbc driver microsoft 
```sh 
https://learn.microsoft.com/en-us/sql/connect/odbc/download-odbc-driver-for-sql-server?view=sql-server-ver16
```
- download extention php sesuai versi php kalian masing-masing
```sh
https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16
```
- setelah success install **ODBC** dan download **EXTENTION PHP** ubah 
**php.ini** pada directori php di komputer kalian masing masing
default dir pada windows:
#### xampp
`C:\xampp\php\php.ini`
#### laragon
`C:\laragon\bin\php\php-7.4.14-nts-Win32-vc15-x64\php.ini`


## Panduan instalasi Laravel

ikuti langkah langkah di bawah untuk instalasi laravel
 
- clone project via git / download zip file
- install composer dependecies
```sh
composer install
```
- copy dan rename .env.example menjadi .env `(silakan ikuti syntax di bawah jika mengunakan terminal)`
```sh
mv .env.example .env
``` 
- generate key.
```sh
php artisan key:generate
```
- membuat database baru via command / via cli sama saja
```sh
CREATE DATABASE Laravel-sql-server
```
- migrasi database 
```sh
php artisan migrate
```
 
