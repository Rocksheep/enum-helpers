<?php

declare(strict_types=1);

namespace Rocksheep\EnumHelpers;

use ReflectionEnum;
use ReflectionEnumBackedCase;
use ReflectionEnumUnitCase;
use Rocksheep\EnumHelpers\Attributes\Hidden;

trait EnumToArray
{
    /**
     * @return array<int, string>
     */
    public static function names(): array
    {
        return array_column(self::visibleCases(), 'name');
    }

    /**
     * @return array<int, mixed>
     */
    public static function values(): array
    {
        return array_column(self::visibleCases(), 'value');
    }

    /**
     * @return array<string, mixed>
     */
    public static function toArray(): array
    {
        return array_combine(self::values(), self::names());
    }

    public static function visibleCases(): array
    {
        $reflection = new ReflectionEnum(static::class);

        $values = array_filter(
            $reflection->getCases(),
            fn (ReflectionEnumUnitCase|ReflectionEnumBackedCase $constant) => empty($constant->getAttributes(Hidden::class))
        );

        return array_map(
            fn ($value) => $value->getValue(),
            $values
        );
    }
}
