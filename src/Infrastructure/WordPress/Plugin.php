<?php

namespace KamaThumb\Infrastructure\WordPress;

final class Plugin
{
    protected static ?self $instance = null;

    protected ServiceContainer $container;

    protected function __construct()
    {
        $this->container = ServiceContainer::getInstance();
        $this->registerHooks();
        TemplateFunctions::register();
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    protected function registerHooks(): void
    {
        if (is_admin()) {
            add_action('admin_menu', [$this, 'registerAdminMenu']);
            add_action('admin_post_kama_thumb_clear_cache', [$this, 'handleClearCache']);
        }

        add_filter('jpeg_quality', fn () => 100);
    }

    public function registerAdminMenu(): void
    {
        add_submenu_page(
            'options-general.php',
            __('Thumbnail Settings', 'thumbnail'),
            __('Thumbnails', 'thumbnail'),
            'manage_options',
            'kama-thumbnail-settings',
            [$this, 'renderSettingsPage']
        );
    }

    public function renderSettingsPage(): void
    {
        if (! current_user_can('manage_options')) {
            return;
        }

        $processor = $this->container->getImageProcessor();
        $storage = $this->container->getStorage();

        include __DIR__.'/../../../views/admin/settings.php';
    }

    public function handleClearCache(): void
    {
        if (! current_user_can('manage_options')) {
            wp_die(__('You do not have permission to perform this action.', 'thumbnail'));
        }

        check_admin_referer('kama_thumb_clear_cache');

        $storage = $this->container->getStorage();
        $count = $storage->clearCache();

        wp_redirect(add_query_arg([
            'page'          => 'kama-thumbnail-settings',
            'cache_cleared' => $count,
        ], admin_url('options-general.php')));
        exit;
    }

    public function getContainer(): ServiceContainer
    {
        return $this->container;
    }
}
