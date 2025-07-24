<?php

namespace App\Models;

class Home
{
    public static function getAll(): array
    {
        return [
            "id" => 1,
            "page" => "Home",
            'date' => date("Y-m-d")
        ];
    }

}
