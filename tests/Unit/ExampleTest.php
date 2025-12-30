<?php

it('can test basic functionality', function () {
    expect(true)->toBeTrue();
});

it('can assert strings', function () {
    $string = 'Hello World';
    expect($string)->toContain('World');
});

it('can assert arrays', function () {
    $array = ['a' => 1, 'b' => 2];
    expect($array)->toHaveKey('a');
});

it('can test new architecture classes', function () {
    expect(class_exists('KamaThumb\\Domain\\ValueObjects\\ThumbnailProfile'))->toBeTrue();
    expect(class_exists('KamaThumb\\Infrastructure\\WordPress\\Plugin'))->toBeTrue();
});
