<?php

use Rocksheep\EnumHelpers\Tests\Mocks\Product;

test('it returns the enum as an array', function () {
    expect(Product::toArray())
        ->toBeArray();
});

test('it returns the enum as key,value pairs where they are keyed by value', function () {
    expect(Product::toArray())
        ->toBe([
            'laravel' => 'Laravel',
            'vue' => 'Vue',
        ]);
});

test('it filters out hidden cases', function () {
    expect(Product::toArray())
        ->not->toHaveKey('drupal');
});

test('it returns all values except for the ones that are hidden', function () {
    expect(Product::values())
        ->toBe([
            'laravel',
            'vue',
        ]);
});

test('it returns all names except for the ones that are hidden', function () {
    expect(Product::names())
        ->toBe([
            'Laravel',
            'Vue',
        ]);
});
