<?php

namespace App\Helpers;
use App\Models\User;

class GenerateId
{
    public static function generateId($model, $trow, $length = 4, $prefix)
    {
        $data = $model::orderBy('id', 'desc')->first();
        if (!$data) {
            $og_length = $length;
            $last_number = '';
        } else {
            $code = substr($data->$trow, strlen($prefix) + 1);
            $actual_last_number = intval($code); // Use intval to ensure it's an integer.
            $increment_last_number = $actual_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = str_repeat('0', $og_length);
        return $prefix . '' . $zeros . $last_number;
    }

}
