<?php

namespace Rocksheep\EnumHelpers\Tests\Mocks;

use Rocksheep\EnumHelpers\Attributes\Hidden;
use Rocksheep\EnumHelpers\EnumToArray;

enum Product: string
{
    use EnumToArray;

    case Laravel = 'laravel';

    case Vue = 'vue';

    #[Hidden]
    case Drupal = 'drupal';
}
