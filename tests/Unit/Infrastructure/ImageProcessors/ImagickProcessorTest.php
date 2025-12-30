<?php

use KamaThumb\Infrastructure\ImageProcessors\ImagickProcessor;

beforeEach(function () {
    $this->processor = new ImagickProcessor;
});

it('checks if imagick is available', function () {
    expect($this->processor->isAvailable())->toBe(extension_loaded('imagick'));
});

it('returns supported formats', function () {
    $formats = $this->processor->getSupportedFormats();

    expect($formats)->toBeArray()
        ->and($formats)->toContain('jpg')
        ->and($formats)->toContain('jpeg')
        ->and($formats)->toContain('png')
        ->and($formats)->toContain('gif')
        ->and($formats)->toContain('webp');
});
