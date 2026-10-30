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
}
