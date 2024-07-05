# Enum Helpers

[![PHP from Packagist](https://img.shields.io/packagist/php-v/rocksheep/enum-helpers.svg)](https://packagist.org/packages/rocksheep/enum-helpers)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rocksheep/enum-helpers.svg)](https://packagist.org/packages/rocksheep/enum-helpers)
[![Software License](https://img.shields.io/packagist/l/rocksheep/enum-helpers.svg)](LICENSE)
[![Build Status](https://img.shields.io/github/actions/workflow/status/Rocksheep/enum-helpers/php.yml?branch=main
)](https://github.com/rocksheep/enum-helpers/actions/workflows/php.yml)

This package provides a set of utilities to work with PHP enums, making it easier to convert enums to arrays and handle hidden enum cases. It leverages PHP 8.1's enum feature, adding functionality to enhance its usability within your projects.

## Installation

You can install the package via composer:

```bash
composer require rocksheep/enum-helpers
```

## Usage

### Basic Usage

To use the `EnumToArray` trait in your enum, simply use it within your enum definition:

```php
use Rocksheep\EnumHelpers\EnumToArray;

enum YourEnum: string
{
    use EnumToArray;

    case Example = 'example';
}
```

This will allow you to convert your enum cases to an array easily.

### Hiding Enum Cases

To hide specific enum cases from being listed, use the Hidden attribute:

```php
use Rocksheep\EnumHelpers\Attributes\Hidden;
use Rocksheep\EnumHelpers\EnumToArray;

enum YourEnum: string
{
    use EnumToArray;

    case Visible = 'visible';

    #[Hidden]
    case Hidden = 'hidden';
}
```

### Converting Enum to Array

To convert an enum to an array, simply call the `toArray` method:

```php
$array = YourEnum::toArray();
```

## Testing

To run the tests, execute:

```bash
./vendor/bin/pest
```

Or you can use:

```bash
composer test
```

## Contributing

Contributions are welcome! Please feel free to submit a pull request.

## License

The package is open-sourced software licensed under the MIT license.
