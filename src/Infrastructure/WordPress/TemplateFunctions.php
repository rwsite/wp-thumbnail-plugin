<?php

namespace KamaThumb\Infrastructure\WordPress;

final class TemplateFunctions
{
    public static function register(): void
    {
        if (function_exists('thumb_src')) {
            return;
        }

        eval('
            function thumb_src(array $args = [], string|int $src = "notset"): string
            {
                $container = \KamaThumb\Infrastructure\WordPress\ServiceContainer::getInstance();
                $service = $container->getThumbnailService();

                $source = $src !== "notset" ? $src : ($args["src"] ?? "");

                return $service->generateThumbnail($source, $args) ?? "";
            }

            function thumb_img(array $args = [], string|int $src = "notset"): string
            {
                $url = thumb_src($args, $src);
                if (! $url) {
                    return "";
                }

                $width = $args["width"] ?? 0;
                $height = $args["height"] ?? 0;
                $alt = $args["alt"] ?? "";
                $class = $args["class"] ?? "";
                $attr = $args["attr"] ?? "";

                $attributes = [];
                $attributes[] = "src=\"".esc_url($url)."\"";

                if ($width) {
                    $attributes[] = "width=\"".(int) $width."\"";
                }
                if ($height) {
                    $attributes[] = "height=\"".(int) $height."\"";
                }
                if ($alt) {
                    $attributes[] = "alt=\"".esc_attr($alt)."\"";
                }
                if ($class) {
                    $attributes[] = "class=\"".esc_attr($class)."\"";
                }
                if ($attr) {
                    $attributes[] = $attr;
                }

                return "<img ".implode(" ", $attributes)." />";
            }

            function thumb_a_img(array $args = [], string|int $src = "notset"): string
            {
                $img = thumb_img($args, $src);
                if (! $img) {
                    return "";
                }

                $source = $src !== "notset" ? $src : ($args["src"] ?? "");
                $originalUrl = is_numeric($source) && function_exists("wp_get_attachment_url")
                    ? wp_get_attachment_url((int) $source)
                    : $source;

                if (! $originalUrl) {
                    return $img;
                }

                return "<a href=\"".esc_url($originalUrl)."\">".$img."</a>";
            }
        ');
    }
}
