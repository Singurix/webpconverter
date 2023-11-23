# Конвертор картинок
Решение конвертирует картинки в формате jpg и png в формат webp

## Требования

- php >= 7.4
- zlib >= 1.2.0.4
- gd >= 2.1.0

## Установка

```bash
$ composer require singurix/webpconverter
```

## Использование
```php
(new Singurix\Webpconverter\Convertor())
    ->setSrcPath('test.jpg')
    ->setDestPath('test.webp')
    ->convert();
```