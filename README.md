# Multi Language Codeigniter
Library multi language codeigniter.
disini saya asumsikan Anda sudah memiliki file `language/english/text_lang.php` dan `language/indonesia/text_lang.php`
dengan masing-masing file berisi kunci bahasa dan isi dari kunci bahasa tersebut.
```php
//english
$lang['welcome'] = 'Welcome in english';
$lang['saysometing'] = 'Thanks you %s , now you have %s poin';
```
```php
//indonesia
$lang['welcome'] = 'Salam dalam bahasa';
$lang['saysometing'] = 'Terimakasih %s , poin Anda sekarang %s';
```

## Instalasi
ikuti langkah-langkah berikut
- Copy file `language_swicth.php` ke folder `application/library` 
- Copy file `languageswicth_helper.php` ke folder `application/helper`
- tambahkan `languageswicth` di file autoload.php `$autoload['helper'] = array('languageswicth');`

## Setup
bila Anda mempunyai bahasa lainnya, misal France, sediakan terlebih dahulu file language nya di folder `language/france/`
##### Mengatur kesediaan bahasa
di file `library/language_swicth.php` 
```php
private $language_available =array('english','indonesia');
````
##### Mengatur default bahasa
di file `library/language_swicth.php` 
```php
private $language_default ='english';
````
##### Mengatur file bahasa
di file `library/language_swicth.php` 
```php
private $language_file =array('text');
//bila mempunya file lain, misal bahasa untuk email_lang.php
private $language_file =array('text','email');
````

##### Load library
load library
```php
$this->load->library('language_swicth');
````

## Cara menggunakan atau menjalankan
##### Cara seting ke bahasa
Anda bisa set bahasa dengan menggunakan parameter `GET` 
`misal: localhost/ci-project/?lang=indonesia`
##### Cara memangil
```php
<?php 
lang('welcome'); 
?>

#english: Welcome in english
#indonesia: Salam dalam bahasa
```
##### Cara dengan parameter
```php
<?php 
lang('saysometing',array('Robeth','100')); 
?>
#english: Thanks you Robeth , now you have 100 poin
#indonesia: Terimakasih Robeth , poin Anda sekarang 100
```
