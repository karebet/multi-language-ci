# multi-language-ci
Library multi language codeigniter
disini saya asumsikan Anda sudah memiliki file `language/english/text_lang.php` dan `language/indonesia/text_lang.php`
dengan masing-masing file berisi kunci bahasa dan isi dari kunci bahasa
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

## Cara menggunakan atau menjalankan
##### Cara setting ke bahasa
Anda bisa set bahasa dengan menggunakan parameter `GET`
`misal: localhost/ci-project/?language_swicthto=indonesia `
##### Cara memangil
```php
<p> <?php lang('welcome'); ?> <p> ///
```
##### Cara dengan parameter
```php
<p> <?php lang('saysometing',array('Robeth','100')); ?> <p> ///
```
