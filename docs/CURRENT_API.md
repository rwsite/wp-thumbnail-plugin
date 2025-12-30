# Current API Documentation

## New API (Recommended)

### thumb_src($args, $src)
Returns thumbnail URL only.

**Parameters:**
- `$args` (array): Configuration options
- `$src` (string|int): Image source URL or attachment ID

**Returns:** string - Thumbnail URL

**Example:**
```php
$url = thumb_src([
    'width' => 300,
    'height' => 200,
    'crop' => true,
    'quality' => 90
], get_post_thumbnail_id());
```

### thumb_img($args, $src)
Returns complete `<img>` tag for thumbnail.

**Parameters:**
- `$args` (array): Configuration options
- `$src` (string|int): Image source URL or attachment ID

**Returns:** string - HTML img tag

**Example:**
```php
echo thumb_img([
    'width' => 300,
    'height' => 200,
    'crop' => true,
    'class' => 'img-fluid',
    'alt' => 'Thumbnail'
], 'https://example.com/image.jpg');
```

### thumb_a_img($args, $src)
Returns thumbnail wrapped in anchor tag linking to original.

**Parameters:**
- `$args` (array): Configuration options
- `$src` (string|int): Image source URL or attachment ID

**Returns:** string - HTML anchor with img tag

**Example:**
```php
echo thumb_a_img([
    'width' => 300,
    'height' => 200
], get_post_thumbnail_id());
```

## Legacy API (Backward Compatible)

### kama_thumb_src($args, $src)
Legacy wrapper for `thumb_src()`. Works exactly the same.

### kama_thumb_img($args, $src)
Legacy wrapper for `thumb_img()`. Works exactly the same.

### kama_thumb_a_img($args, $src)
Legacy wrapper for `thumb_a_img()`. Works exactly the same.

### get_post_thumbnail($attr)
Get post thumbnail with custom attributes.

**Parameters:**
- `$attr` (array): Thumbnail attributes
  - `width` (int): Width in pixels (default: 480)
  - `height` (int): Height in pixels (default: 340)
  - `crop` (bool): Enable cropping (default: true)
  - `post_id` (int): Post ID (default: current post)
  - `show_placeholder` (bool): Show placeholder if no image (default: true)
  - `attach_id` (int): Attachment ID
  - `class` (string): CSS classes (default: 'img-fluid rounded')
  - `attr` (string): Additional HTML attributes

**Returns:** string - HTML img tag or null

## Configuration Options

### Main Options (stored in wp_options as 'kama_thumbnail')

- `width` (int): Default thumbnail width
- `height` (int): Default thumbnail height
- `quality` (int): JPEG quality (0-100)
- `crop` (bool|array): Crop settings
- `webp` (bool): Enable WebP format support
- `no_photo_url` (string): Placeholder image URL
- `cache_folder` (string): Cache directory path
- `cache_folder_url` (string): Cache directory URL

## Architecture

### Domain Layer
- **ValueObjects**: `ThumbnailProfile`, `ImageSource`
- **Contracts**: `ImageProcessorInterface`, `StorageInterface`
- **Services**: `ThumbnailGenerator`

### Infrastructure Layer
- **ImageProcessors**: `ImagickProcessor`, `GdProcessor`
- **Storage**: `FileSystemStorage`
- **WordPress**: `ServiceContainer`, `Plugin`, `TemplateFunctions`

### Application Layer
- **Services**: `ThumbnailService`

## Cache Structure

Thumbnails are cached in: `wp-content/cache/thumb/`

Cache naming pattern: Based on source URL hash and dimensions.
