<?php

use App\Enums\PropertyStatus;
use App\Models\Amenity;

if (!function_exists('name_alphabetic')) {
    function name_alphabetic($name)
    {
        return array_reduce(
            explode(' ', $name),
            function ($initials, $word) {
                return sprintf('%s%s', $initials, substr($word, 0, 1));
            },
            ''
        );
    }
}

if (!function_exists('random_colour')) {
    function random_colour()
    {
        $colours = ['primary', 'success', 'secondary', 'info', 'danger', 'dark'];

        $random_keys = array_rand($colours);

        return $colours[$random_keys];
    }
}

if (!function_exists('badge_colour')) {
    function badge_colour($status)
    {
        if ($status === 'verified') {
            return 'badge-success';
        } elseif ($status === 'rejected') {
            return 'badge-danger';
        } else {
            return 'badge-primary';
        }
    }
}

if (!function_exists('property_statuses')) {
    function property_statuses()
    {
        return array_column(PropertyStatus::cases(), 'value');
    }
}

if (!function_exists('convert_name')) {
    function convert_name($value)
    {
        if (str_contains($value, '-')) {
            return ucwords(str_replace('-', ' ', $value));
        } else {
            return ucwords(str_replace('_', ' ', $value));
        }
    }
}

if (!function_exists('amenity')) {
    function amenity($id)
    {
        return Amenity::find($id);
    }
}

if (!function_exists('currency_format')) {
    function currency_format($value, $is_decimal = false)
    {
        if ($is_decimal) {
            return number_format($value, 3);
        } else {
            return str_replace('.000', '', number_format($value, 3));
        }
    }
}

if (!function_exists('funded')) {
    function funded($invest, $price)
    {
        return ceil(($invest / $price) * 100);
    }
}
