<?php

use Rocksheep\EnumHelpers\Tests\Mocks\Product;

test('it returns the enum as an array', function () {
    expect(Product::toArray())
        ->toBeArray();
});

test('the returned array contains a key and a value', function () {
    expect(Product::toArray())
        ->toBe([
            'laravel' => 'Laravel',
            'vue' => 'Vue',
        ]);
});

test('it filters out hidden values', function () {
    expect(Product::toArray())
        ->not->toHaveKey('drupal');
});

test('it returns all values', function () {
    expect(Product::values())
        ->toBe([
            'laravel',
            'vue',
        ]);
});

test('it returns all names', function () {
    expect(Product::names())
        ->toBe([
            'Laravel',
            'Vue',
        ]);
});
