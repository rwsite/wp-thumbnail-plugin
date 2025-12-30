<?php

use KamaThumb\Infrastructure\ImageProcessors\GdProcessor;

beforeEach(function () {
    $this->processor = new GdProcessor;
});

it('checks if gd is available', function () {
    expect($this->processor->isAvailable())->toBe(function_exists('gd_info'));
});

it('returns supported formats', function () {
    $formats = $this->processor->getSupportedFormats();

    expect($formats)->toBeArray()
        ->and($formats)->toContain('jpg')
        ->and($formats)->toContain('jpeg')
        ->and($formats)->toContain('png')
        ->and($formats)->toContain('gif');
});

it('includes webp if available', function () {
    $formats = $this->processor->getSupportedFormats();

    if (function_exists('imagewebp')) {
        expect($formats)->toContain('webp');
    } else {
        expect($formats)->not->toContain('webp');
    }
});
