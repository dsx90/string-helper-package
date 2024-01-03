## Описание

Помощник для работы со строками

`StringHelper::trim()` Обрезает строку до нужного количества символов

## Минимальные требования

```
php >=7.4
```

## Установка

```bash
composer require dsx90/string-helper-package
```

## Использование

```php
<?php

$str = \Dsx90\StringHelperPackage\StringHelper::trim("
Packagist - это репозиторий пакетов Composer по умолчанию. 
Он позволяет вам находить пакеты и позволяет Composer знать,
 откуда взять код.
", 50);

```