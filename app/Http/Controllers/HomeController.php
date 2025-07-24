<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function index(): array
    {
        return Home::getAll();
    }
}
