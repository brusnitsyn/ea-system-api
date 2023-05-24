### 1. Старт (Windows)

Необходимое ПО для установки:

- [OpenServer](https://ospanel.io/download/);
- [PHP >= 8.1](https://www.php.net/downloads.php) (Можно использовать предустановленный php из OpenServer);
- [Composer](https://getcomposer.org/download).

После установки ПО необходимо клонировать/скачать проект с гит.

### 2. Установка зависимостей

В корневой папке с проектом открыть консоль/Windows Terminal или в терминале IDE выполнить команду:
```bash
composer install
```

### 3. Запуск миграций

> Перед запуском миграций, обязательно запустите OpenServer.

> Откройте phpMyAdmin и создайте базу данных с именем **eas**.

В консоле выполнить команду:

```bash
php artisan migrate --seed
```

### 4. Запуск сервера

> Перед запуском севера, обязательно запустите OpenServer.

В консоле выполнить команду:

```bash
php artisan serve
```

### Лицензии

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). 

[Laravel site](https://laravel.com/docs)
