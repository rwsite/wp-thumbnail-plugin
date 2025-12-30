<?php
/**
 * @var \KamaThumb\Domain\Contracts\ImageProcessorInterface $processor
 * @var \KamaThumb\Domain\Contracts\StorageInterface $storage
 */
defined('ABSPATH') || exit;

$cache_cleared = isset($_GET['cache_cleared']) ? (int) $_GET['cache_cleared'] : 0;
?>

<div class="wrap">
    <h1><?php echo esc_html__('Thumbnail Settings', 'thumbnail'); ?></h1>

    <?php if ($cache_cleared > 0) { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php echo sprintf(esc_html__('Cache cleared! %d files deleted.', 'thumbnail'), $cache_cleared); ?></p>
        </div>
    <?php } ?>

    <div class="card">
        <h2><?php echo esc_html__('System Information', 'thumbnail'); ?></h2>
        <table class="form-table">
            <tr>
                <th scope="row"><?php echo esc_html__('Image Processor', 'thumbnail'); ?></th>
                <td>
                    <strong><?php echo esc_html(get_class($processor)); ?></strong>
                    <p class="description">
                        <?php echo $processor->isAvailable()
                            ? esc_html__('Available', 'thumbnail')
                            : esc_html__('Not available', 'thumbnail'); ?>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row"><?php echo esc_html__('Supported Formats', 'thumbnail'); ?></th>
                <td>
                    <?php echo esc_html(implode(', ', $processor->getSupportedFormats())); ?>
                </td>
            </tr>
            <tr>
                <th scope="row"><?php echo esc_html__('Cache Directory', 'thumbnail'); ?></th>
                <td>
                    <code><?php echo esc_html($storage->path('')); ?></code>
                    <p class="description">
                        <?php echo is_writable($storage->path(''))
                            ? esc_html__('Writable', 'thumbnail')
                            : esc_html__('Not writable', 'thumbnail'); ?>
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div class="card">
        <h2><?php echo esc_html__('Cache Management', 'thumbnail'); ?></h2>
        <p><?php echo esc_html__('Clear all cached thumbnails. They will be regenerated on demand.', 'thumbnail'); ?></p>
        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <?php wp_nonce_field('kama_thumb_clear_cache'); ?>
            <input type="hidden" name="action" value="kama_thumb_clear_cache">
            <button type="submit" class="button button-secondary">
                <?php echo esc_html__('Clear Cache', 'thumbnail'); ?>
            </button>
        </form>
    </div>

    <div class="card">
        <h2><?php echo esc_html__('Usage Examples', 'thumbnail'); ?></h2>
        <h3><?php echo esc_html__('New API (Recommended)', 'thumbnail'); ?></h3>
        <pre><code>&lt;?php
// Get thumbnail URL
$url = thumb_src([
    'width' => 300,
    'height' => 200,
    'crop' => true,
    'quality' => 90,
    'post_id' => get_the_ID()
]);

// Get thumbnail img tag
echo thumb_img([
    'width' => 300,
    'height' => 200,
    'crop' => true,
    'class' => 'img-fluid',
    'alt' => get_the_title()
], get_post_thumbnail_id());

// Get thumbnail with link to original
echo thumb_a_img([
    'width' => 300,
    'height' => 200
], 'https://example.com/image.jpg');
?&gt;</code></pre>

        <h3><?php echo esc_html__('Legacy API (Still Supported)', 'thumbnail'); ?></h3>
        <pre><code>&lt;?php
// Old functions still work
echo kama_thumb_src(['width' => 300, 'height' => 200]);
echo kama_thumb_img(['width' => 300, 'height' => 200]);
echo kama_thumb_a_img(['width' => 300, 'height' => 200]);
?&gt;</code></pre>
    </div>
</div>
