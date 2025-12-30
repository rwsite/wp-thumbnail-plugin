# Thumbnails

WordPress плагин для генерации и кэширования миниатюр «на лету». Форк Kama Thumbnail с поддержкой WebP и современной архитектурой.

## Возможности

- Автоматическая генерация миниатюр с кэшированием
- Поддержка WebP формата
- Умный поиск исходного изображения (featured image, первое изображение в контенте, вложения)
- Обрезка и изменение размера с сохранением пропорций
- Настройка качества и формата через админ-панель
- Совместимость с legacy API (`kama_thumb_*`) и новым API (`thumb_*`)

## Требования

- **WordPress**: 5.0+ (протестировано до 6.7)
- **PHP**: 7.4 - 8.x
- **GD** или **Imagick** библиотека для обработки изображений

## Установка

1. Скопируй папку плагина в `wp-content/plugins/`
2. Активируй плагин в админ-панели WordPress
3. Настрой параметры в разделе **Настройки → Thumbnails**

## API функции

### Получить URL миниатюры

```php
$url = thumb_src([
    'width'  => 480,
    'height' => 340,
    'crop'   => true,
]);

// Или с указанием источника
$url = thumb_src([
    'width' => 300,
    'height' => 200,
], get_post_thumbnail_id());
```

### Получить тег `<img>`

```php
echo thumb_img([
    'width'  => 480,
    'height' => 340,
    'crop'   => true,
    'class'  => 'img-fluid rounded',
    'alt'    => 'Описание изображения',
]);
```

### Получить `<a><img></a>`

```php
echo thumb_a_img([
    'width'  => 480,
    'height' => 340,
    'crop'   => true,
]);
```

## Параметры

| Параметр | Тип | По умолчанию | Описание |
|----------|-----|--------------|----------|
| `width` | int | 0 | Ширина миниатюры |
| `height` | int | 0 | Высота миниатюры |
| `crop` | bool | true | Обрезать изображение |
| `class` | string | '' | CSS класс для `<img>` |
| `alt` | string | '' | Alt текст для `<img>` |
| `attr` | string | '' | Дополнительные атрибуты |
| `src` | string\|int | '' | ID вложения или URL изображения |

## Legacy API

Для обратной совместимости доступны функции `kama_thumb_src()`, `kama_thumb_img()`, `kama_thumb_a_img()`.

## Лицензия

GPL v2 or later

## Автор

**Aleksey Tikhomirov**  
[alex@rwsite.ru](mailto:alex@rwsite.ru) | [rwsite.ru](https://rwsite.ru)
