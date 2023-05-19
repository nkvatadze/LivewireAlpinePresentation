<?php

namespace App\Enums;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

enum Roles: string
{
    case Customer = 'customer';
    case Company = 'company';

    public static function implodedValues(): string
    {
        return self::toCollection()->pluck('value')->implode(',');
    }

    public static function options(): Collection
    {
        return self::toCollection()->pluck('name', 'value')->map(fn ($option) => Str::headline($option));
    }

    public static function toCollection(): Collection
    {
        return collect(self::cases());
    }
}
