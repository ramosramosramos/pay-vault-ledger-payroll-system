<?php

namespace App\Concerns;

trait HasEnumOption
{
    /**
     * Get employment types as key-value options.
     *
     * @return array<string, string>
     */
    public static function options(): array
    {

        if (! enum_exists(self::class)) {
            throw new \BadMethodCallException;
        }
        $options = [];

        foreach (self::cases() as $case) {
            $options[$case->value] = $case->label();
        }

        return $options;
    }

    public static function optionKeys(): array
    {

        if (! enum_exists(self::class)) {
            throw new \BadMethodCallException;
        }

        return array_column(self::cases(), 'value');
    }
}
