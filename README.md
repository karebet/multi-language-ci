# multi-language-ci
Library multi language codeigniter
disini saya asumsikan Anda sudah memiliki file `language/english/text_lang.php` dan `language/indonesia/text_lang.php`
dengan masing-masing file berisi kunci bahasa dan isi dari kunci bahasa
```php
//english
$lang['welcome'] = 'Welcome in english';
```
```php
//indonesia
$lang['welcome'] = 'Salam dalam bahasa';
```


## Instalasi
ikuti langkah-langkah berikut
- Copy file `language_swicth.php` ke folder `application/library` 
- Copy file `languageswicth_helper.php` ke folder `application/helper`
- tambahkan `languageswicth` di file autoload.php `$autoload['helper'] = array('languageswicth');`
